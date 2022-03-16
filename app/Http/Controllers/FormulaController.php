<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormulaStoreRequest;
use App\Http\Requests\FormulaUpdateRequest;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\RakController;
use App\Models\Formula;
use App\Models\Rak;
use App\Models\Merek;
use App\Models\KelasObat;
use App\Models\GolonganObat;
use App\Models\Satuan;
use App\Models\Generik;
use App\Models\AturanMinum;
use App\Models\Sediaan;
use DB;
use Illuminate\Http\Request;

class FormulaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $formulas = Formula::all();
        return view('formula.index', compact('formulas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		$satuans     = createSelectOption(Satuan::all(), 'satuan');
		$sediaans    = createSelectOption(Sediaan::all(), 'sediaan');
		$kelas_obats = createSelectOption(KelasObat::all(), 'kelas_obat');

		$generiks = Generik::when(request('term'), function ($query, $term) {
                $query->where('generik', 'like', "%$term%");
            })->limit(5)->get();
		$aturan_minums = AturanMinum::when(request('term'), function ($query, $term) {
                $query->where('aturan_minum', 'like', "%$term%");
            })->limit(5)->get();
    
        return inertia('Formulas/Create', compact(
            'satuans', 
            'generiks', 
            'aturan_minums', 
            'kelas_obats', 
            'sediaans'
        ));
    }

    /**
     * @param \App\Http\Requests\FormulaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormulaStoreRequest $request)
    {
        /* dd( $request->validated() ); */
        $fm = new Formula;
        $formula        = Formula::create($request->only(
            'indikasi',
            'kontraindikasi',
            'efek_samping',
            'dijual_bebas',
            'fornas',
            'sediaan_id',
            'aturan_minum_id',
            'peringatan',
            'formula_json',
            'boleh_dipuyer',
            'komposisis'
        ));
		$formula->komposisi()->delete();
        $formula->komposisi()->createMany($fm->komposisiUnsorted( $request->komposisis ));

        // cari rak dengan id
        // atau buat rak baru bila rak_id tidak ditemukan
        //
        $rak   = new RakController;
        $merek = $rak->inputRakMerek($formula, $request)['merek'];

        $request->session()->flash('message', 'Formula untuk Merek ' . $merek->merek_test . ' berhasil dibuat');
        return redirect()->route('mereks.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formula $formula
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Formula $formula)
    {
        return view('formula.show', compact('formula'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formula $formula
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
		$formula  = Formula::with(
		  'rak.merek.rak.formula.komposisi', 
		  'komposisi.generik',  
		  'komposisi.satuan', 
		  'sediaan', 
		  'aturan_minum'
		)->where('id', $id)->first();

		$formula->setAppends($formula->getMutatedAttributes())->toArray();

		$generiks = Generik::when(request('term'), function ($query, $term) {
                $query->where('generik', 'like', "%$term%");
            })->limit(15)->get();

		  $aturan_minums = AturanMinum::when(request('term'), function ($query, $term) {
			  $query->where('aturan_minum', 'like', "%$term%");
		  })->limit(15)->get();

		$sediaans = createSelectOption(Sediaan::all(), 'sediaan');
		$satuans  = createSelectOption(Satuan::all(), 'satuan');

		$komposisis = [];
		$mereks     = $formula->merek;
		foreach ($formula->komposisi as $k) {
		  $komposisis[] = [
			'generik_id'    => $k->generik_id,
			'generik'       => $k->generik->generik,
			'generik_model' => $k->generik->generik,
			'bobot'         => $k->bobot,
			'satuan_id'     => $k->satuan_id,
			'satuan'        => $k->satuan->satuan,
		  ];
		}
		return inertia('Formulas/Create', compact(
		  'formula',
		  'mereks',
		  'aturan_minums',
		  'generiks',
		  'satuans',
		  'sediaans',
		  'komposisis',
		));
    }

    /**
     * @param \App\Http\Requests\FormulaUpdateRequest $request
     * @param \App\Models\Formula $formula
     * @return \Illuminate\Http\Response
     */
    public function update(FormulaUpdateRequest $request, Formula $formula)
    {
	  DB::beginTransaction();
	  try {
	  	// update komposisi
		$formula->komposisi()->delete();
		$formula->komposisi()->createMany($formula->komposisiUnsorted($request->komposisis));

		//update formula
        $formula->update($request->validated());
        $request->session()->flash('message', 'Formula berhasil diupdate');
	  	DB::commit();
        return redirect()->route('mereks.index');
	  } catch (\Exception $e) {
	  	DB::rollback();
	  	throw $e;
	  }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formula $formula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formula $formula)
    {
        $request->session()->flash('message', 'Formula berhasil dihapus');
        $formula->delete();
        return redirect()->route('mereks.index');
    }
}
