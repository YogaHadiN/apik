<?php

namespace App\Http\Controllers;

use App\Http\Requests\RakStoreRequest;
use App\Http\Requests\RakUpdateRequest;
use App\Models\Rak;
use App\Models\Formula;
use App\Models\Merek;
use App\Models\KelasObat;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $raks = Rak::all();

        return view('rak.index', compact('raks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
		$formula  = Formula::with(
		  'rak.merek.rak.formula.komposisi', 
		  'komposisi.generik',  
		  'komposisi.satuan', 
		  'sediaan', 
		  'aturan_minum'
		)->where('id', $id)->first();
		$kelas_obats = createSelectOption(KelasObat::all(), 'kelas_obat');
		return inertia('Raks/Edit', compact('formula', 'kelas_obats'));
    }

    /**
     * @param \App\Http\Requests\RakStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RakStoreRequest $request)
    {
        $formula = Formula::find( $request->formula_id );
        $input   = $this->inputRakMerek($formula, $request);

        $request->session()->flash('message', 'Rak ' . $input['rak']->nomor_rak . ' dan Merek ' . $input['merek']->merek_text. ' berhasil dibuat');
        return redirect()->route('mereks.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Rak $rak
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Rak $rak)
    {
        return view('rak.show', compact('rak'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Rak $rak
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
		$rak = Rak::with('merek', 'formula.komposisi.generik', 'formula.komposisi.satuan',  'formula.sediaan', 'formula.aturan_minum')->where('id', $id)->first();

		$kelas_obats = createSelectOption(KelasObat::all(), 'kelas_obat');
		return inertia('Raks/Edit', compact(
		  'rak',
		  'kelas_obats',
		));
    }

    /**
     * @param \App\Http\Requests\RakUpdateRequest $request
     * @param \App\Models\Rak $rak
     * @return \Illuminate\Http\Response
     */
    public function update(RakUpdateRequest $request, Rak $rak)
    {
        $rak->update($request->validated());
        $request->session()->flash('message', 'Update berhasil');

        return redirect()->route('mereks.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Rak $rak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Rak $rak)
    {
        $rak->delete();

        return redirect()->route('rak.index');
    }
	public function createMerek($id){
	    $rak = Rak::with('formula.komposisi.generik', 'formula.komposisi.satuan')->where('id', $id )->first();
        return inertia('Mereks/Edit', compact('rak'));
	}
    public function inputRakMerek($formula, $request){
        
        $rak     = Rak::firstOrCreate([
            'nomor_rak'     => $request->nomor_rak,
        ], [
            'nomor_rak'     => $request->nomor_rak,
            'harga_beli'    => $request->harga_beli,
            'harga_jual'    => $request->harga_jual,
            'stok_minimal'  => $request->stok_minimal,
            'formula_id'    => $formula->id,
            'stok'          => $request->stok,
            'kelas_obat_id' => $request->kelas_obat_id,
        ]);

        $merek = $rak->merek()->save( new Merek([
            'merek'           => $request->merek,
            'exp_date'        => $request->exp_date,
            'unit_tiap_paket' => $request->unit_tiap_paket,
        ]));

        return [
            'rak'   => $rak,
            'merek' => $merek
        ];
    }
}
