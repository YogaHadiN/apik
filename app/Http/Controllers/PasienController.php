<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasienStoreRequest;
use App\Http\Requests\PasienUpdateRequest;
use App\Models\Pasien;
use App\Models\Asuransi;
use Illuminate\Http\Request;
use DB;
use Storage;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        $pasiens = Pasien::when(request('term') ,function ($query, $term) {
			$query->where('nama', 'like', "%$term%");
        })->paginate(15);

        return inertia('Pasiens/Index', compact('pasiens'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		$asuransis = $this->asuransiOption();
        return inertia('Pasiens/Edit', compact(
            'asuransis'
        ));
    }

    /**
     * @param \App\Http\Requests${2:Model}StoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasienStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $pasien = Pasien::create($request->validated());
            DB::commit();
            return redirect()->route('pasiens.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models${2:Model} $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Pasien $pasien)
    {
        return inertia('Pasiens/Show', compact('$pasien'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models${2:Model} $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $pasien = Pasien::with('asuransi')->where('id', $id)->first();
		$asuransis = $this->asuransiOption();
        return inertia('Pasiens/Edit', compact(
            'pasien',
            'asuransis'
        ));
    }

    /**
     * @param \App\Http\Requests${2:Model}UpdateRequest $request
     * @param \App\Models${2:Model} $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(PasienStoreRequest $request, Pasien $pasien)
    {
        DB::beginTransaction();
        try {
            $pasien->update($request->validated());
            $request->session()->flash('message', 'Pasien berhasil diupdate');
            DB::commit();
            return redirect()->route('pasiens.index');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models${2:Model} $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Pasien $pasien)
    {
        DB::beginTransaction();
        try {
            $request->session()->flash('message', 'Pasien berhasil dihapus');
            $pasien->delete();
            DB::commit();
            return redirect()->route('pasiens.index');
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
    private function asuransiOption()
    {
        return Asuransi::when(request('term'), function ($query, $term) { $query->where('nama', 'like', "%$term%"); })->limit(15)->get();
    }

    public function getImage($id, $name){
        $pasien           = Pasien::find($id);
        if (!is_null( $pasien )) {
            $mime_type_name = $name . '_mime_type';
            $photo_path     = $pasien->$name;
            return response(Storage::disk('s3')->get($photo_path))
                ->header('Content-Type', $pasien->$mime_type_name);
        } else {
            return abort(403);
        }
    }
    
}
