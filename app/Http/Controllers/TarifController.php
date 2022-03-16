<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarifStoreRequest;
use App\Http\Requests\TarifUpdateRequest;
use App\Models\Tarif;
use App\Models\Titel;
use App\Models\Coa;
use App\Models\JenisTarif;
use App\Models\Asuransi;
use App\Models\Merek;
use App\Models\TipeTindakan;
use Illuminate\Http\Request;
use DB;

class TarifController extends Controller
{
    /**
     * @param 
     */
    
    public function index(Request $request)
    {
		$tarifTemplate = $this->tarifTemplate();
        $meta = [
            'current_page' => $tarifTemplate['current_page'],
            'last_page'    => $tarifTemplate['last_page'],
            'total'        => $tarifTemplate['total']
        ];
		$tarifs = $tarifTemplate['tarifs'];

		return inertia('Tarifs/Index', compact(
		  'tarifs',
		  'meta'
		));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return inertia('Tarifs/Edit', [
            'mereks'         => $this->mereks(),
            'tipe_tindakans' => TipeTindakan::pluck('tipe_tindakan', 'id')
        ]);
    }

    /**
     * @param \App\Http\Requests${2:Model}StoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TarifStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $jenis_tarif = $this->firstOrCreateJenisTarif($request);
            $jenis_tarif->bahan_habis_pakai()->createMany($this->onlyWhenMerekExists($request->bhps));
            $request->merge(['jenis_tarif_id' => $jenis_tarif->id]);
            foreach (Asuransi::all() as $asuransi) {
                $tarif = $asuransi->tarif()->save( new Tarif( $request->except(['bhps', 'jenis_tarif']) ));
            }

            DB::commit();
            $request->session()->flash('message', 'Tarif ' . $request->jenis_tarif . ' berhasil dibuat');
            return redirect()->route('tarifs.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models${2:Model} $tarif
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tarif $tarif)
    {
        return inertia('Tarifs/Show', compact('$tarif'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models${2:Model} $tarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $tarif = Tarif::with('jenis_tarif.bahan_habis_pakai.merek')->where('id', $id)->first();
        return inertia('Tarifs/Edit', [
            'tarif'          => $tarif,
            'mereks'         => $this->mereks(),
            'tipe_tindakans' => TipeTindakan::pluck('tipe_tindakan', 'id')
        ]);
    }

    /**
     * @param \App\Http\Requests${2:Model}UpdateRequest $request
     * @param \App\Models${2:Model} $tarif
     * @return \Illuminate\Http\Response
     */
    public function update(TarifStoreRequest $request, Tarif $tarif)
    {
        DB::beginTransaction();
        try {
            $tarif->jenis_tarif->update([
                'jenis_tarif' => $request->jenis_tarif
            ]);
            $tarif->jenis_tarif->bahan_habis_pakai()->delete();
            $tarif->jenis_tarif->bahan_habis_pakai()->createMany($this->onlyWhenMerekExists($request->bhps));
            $tarif->update($request->except(['jenis_tarif_id', 'bhps', 'jenis_tarif']));
            $request->session()->flash('message', 'Tarif berhasil diupdate');
            DB::commit();
            return redirect()->route('tarifs.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models${2:Model} $tarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tarif $tarif)
    {
        DB::beginTransaction();
        try {
            $request->session()->flash('message', 'Tarif berhasil dihapus');
            $tarif->delete();
            DB::commit();
            return redirect()->route('tarifs.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    private function onlyWhenMerekExists($arr)
    {
        $res = [];
        foreach ($arr as $a) {
            if (!empty($a['merek_id'])) {
                $res[] = $a;
            }
        }
        return $res;
    }
	/**
	* undocumented function
	*
	* @return void
	*/
	private function mereks()
	{
		return Merek::when(request('term'), function ($query, $term) {
			$query->where('merek', 'like', "%$term%");
		})->limit(15)->get();
	}
    /**
     * undocumented function
     *
     * @return void
     */
    private function firstOrCreateJenisTarif($request)
    {
        $jenis_tarif =  JenisTarif::where('jenis_tarif', $request->jenis_tarif)->first();
        if ( is_null($jenis_tarif) ) {
            $kode_coa = Coa::where('kelompok_coa_id', 'like', '4%')->orderBy('kode_coa', 'desc')->first()? (int) Coa::where('kelompok_coa_id', 'like', '4%')->orderBy('kode_coa', 'desc')->first()->kode_coa + 1 : 400001;
            $coa = Coa::create([
                'kelompok_coa_id' => 4,
                'coa'             => 'Pendapatan ' . $request->jenis_tarif,
                'kode_coa'        => $kode_coa,
                'saldo_awal'      => 0
            ]);
            $jenis_tarif = $coa->jenis_tarif()->save(
                new JenisTarif([
                    'jenis_tarif' => $request->jenis_tarif
                ])
            );
        }
        return $jenis_tarif;
    }
	public function tarifTemplate($id = null){
        if (!empty(request('page'))) {
            $current_page = (int) request('page');
        } else {
            $current_page = 1;
        }
        $displayed_rows = 15;
        $query      = "SELECT ";
        $query     .= "trf.id as id, ";
        $query     .= "ttd.tipe_tindakan as tipe_tindakan, ";
        $query     .= "trf.biaya as biaya, ";
        $query     .= "jtf.jenis_tarif as jenis_tarif ";
        $query     .= "FROM tarifs as trf ";
        $query     .= "JOIN jenis_tarifs as jtf on jtf.id = trf.jenis_tarif_id ";
        $query     .= "JOIN asuransis as asu on asu.id = trf.asuransi_id ";
        $query     .= "JOIN tipe_tindakans as ttd on ttd.id = trf.tipe_tindakan_id ";
        $query     .= "WHERE trf.tenant_id = '" . session()->get('tenant_id') . "' ";
        $query     .= request('term')? "AND jtf.jenis_tarif like '%" . request('term') . "%' " : ' ';
        $query     .= $id? "AND asu.id = {$id} " : "AND asu.nama = 'Biaya Pribadi' ";
        
        $total      = count(DB::select($query));
        $last_page  = ceil($total / $displayed_rows);
        $query     .= "limit " .$displayed_rows * ( $current_page -1 ). ", ". $displayed_rows.";";
        $tarifs     = DB::select($query);

        return compact(
            'current_page',
            'total',
            'last_page',
            'tarifs'
        );
	}
}
