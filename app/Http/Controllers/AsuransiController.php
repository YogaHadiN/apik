<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsuransiStoreRequest;
use App\Http\Requests\AsuransiUpdateRequest;
use App\Models\Asuransi;
use App\Models\Coa;
use DB;
use App\Models\TipeAsuransi;
use Illuminate\Http\Request;

class AsuransiController extends Controller
{

		public $tipe_asuransis;
        public $aktifs;
        public $pelunasan_transfers;
		public $coas;
        public $term;
        /**
         * @param $dependencies
         */
        public function __construct(){
            $this->term = request('term');
            $this->tipe_asuransis     = createSelectOption(TipeAsuransi::all(), 'tipe_asuransi');

            $this->aktifs = [
                1 => 'Aktif',
                0 => 'Tidak aktif',
            ];
            $this->pelunasan_transfers = [
                1 => 'Transfer',
                0 => 'Tunai',
            ];
            $this->coas = Coa::when($this->term, function ($query, $term) {
                    $query->where('coa', 'like', "%$term%");
                })->limit(15)->get();
        }
        

    public function index(Request $request)
    {
        return inertia('Asuransis/Index', [
                        'asuransis' => $this->asuransiQuery()
                    ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return inertia('Asuransis/Edit', [
            'aktifs'              => $this->aktifs,
            'coas'                => $this->coas,
            'pelunasan_transfers' => $this->pelunasan_transfers,
            'tipe_asuransis'      => $this->tipe_asuransis
        ]);
    }

    /**
     * @param \App\Http\Requests\AsuransiStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsuransiStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            
            $kode_coa = Coa::where('kode_coa', 'like', '11%')->orderBy('kode_coa', 'desc')->first()?(int) Coa::where('kode_coa', 'like', '11%')->orderBy('kode_coa', 'desc')->first()->kode_coa + 1 : 1100001;
            $coa_piutang = Coa::create([
                'kelompok_coa_id' => 11,
                'coa'             => 'Piutang asuransi ' . request('nama'),
                'kode_coa'        => $kode_coa,
                'saldo_awal'      => 0
            ]);

            $asuransi = $coa_piutang->asuransi()->save(
                new Asuransi([
                    'nama'                   => request('nama'),
                    'alamat'                 => request('alamat'),
                    'tanggal_berakhir'       => request('tanggal_berakhir'),
                    'alamat_penagihan'       => request('alamat_penagihan'),
                    'catatan_pelayanan_gigi' => request('catatan_pelayanan_gigi'),
                    'tipe_asuransi_id'       => request('tipe_asuransi_id'),
                    'kali_obat'              => request('kali_obat'),
                    'kata_kunci'             => request('kata_kunci'),
                    'aktif'                  => request('aktif'),
                    'pelunasan_transfer'     => request('pelunasan_transfer'),
                ])
            );

            $asuransi->phones()->createMany(onlyWhenNumberExists($request->phones));
            $asuransi->emails()->createMany(array_filter(array_map('array_filter', $request->emails)));

            $tarifs = Asuransi::where('nama', 'Biaya Pribadi')->first()->tarif;
            $asuransi->tarif()->createMany( $tarifs->makeHidden(['id', 'tenant_id', 'created_at', 'updated_at', 'asuransi_id'])->toArray() );

            $request->session()->flash('message', 'Asuransi berhasil dibuat');
            DB::commit();
            return redirect()->route('asuransis.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Asuransi $asuransi
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Asuransi $asuransi)
    {
        return view('asuransi.show', compact('asuransi'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Asuransi $asuransi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        return inertia('Asuransis/Edit', [
            'asuransi'            => Asuransi::with('coa', 'phones', 'emails')->where('id', $id)->first(),
            'aktifs'              => $this->aktifs,
            'coas'                => $this->coas,
            'pelunasan_transfers' => $this->pelunasan_transfers,
            'tipe_asuransis'      => $this->tipe_asuransis
        ]);
    }

    /**
     * @param \App\Http\Requests\AsuransiUpdateRequest $request
     * @param \App\Models\Asuransi $asuransi
     * @return \Illuminate\Http\Response
     */
    public function update(AsuransiStoreRequest $request, Asuransi $asuransi)
    {
        DB::beginTransaction();
        try {
            $asuransi->phones()->delete();
            $asuransi->phones()->createMany(onlyWhenNumberExists($request->phones));

            $asuransi->emails()->delete();
            $asuransi->emails()->createMany($this->onlyWhenEmailExists($request->emails));

            $asuransi = $asuransi->update($request->validated());
            $request->session()->flash('message', 'Asuransi berhasil diupdate');

            DB::commit();
            return redirect()->route('asuransis.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Asuransi $asuransi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Asuransi $asuransi)
    {
        DB::beginTransaction();
        try {
            $request->session()->flash('message', 'Asuransi berhasil dihapus');
            $asuransi->delete();
            DB::commit();
            return redirect()->route('asuransis.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
    /**
     * undocumented function
     *
     * @return void
     */
    private function onlyWhenEmailExists($arr)
    {
        $res = [];
        foreach ($arr as $a) {
            if (!empty($a['email'])) {
                $res[] = $a;
            }
        }
        return $res;
    }
    public function tarif($id){
        $asuransi = Asuransi::find( $id );
        $tc            = new TarifController;
		$tarifTemplate = $tc->tarifTemplate($id);
        $meta = [
            'current_page' => $tarifTemplate['current_page'],
            'last_page'    => $tarifTemplate['last_page'],
            'total'        => $tarifTemplate['total']
        ];
		$tarifs = $tarifTemplate['tarifs'];

		return inertia('Tarifs/Index', compact(
		  'tarifs',
          'meta',
          'asuransi'
		));
    }
    public function asuransiQuery(){
        return Asuransi::with(
            'phones', 
            'emails'
        )->where(
            'nama', 
            'not like', 
            'biaya pribadi'
        )->when($this->term
            ,function ($query, $term) {
			$query->where('nama', 'like', "%$term%");
        })->paginate(15);
    }
    
    
}
