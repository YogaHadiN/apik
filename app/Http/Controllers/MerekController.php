<?php

namespace App\Http\Controllers;

use App\Http\Requests\MerekStoreRequest;
use App\Http\Requests\MerekUpdateRequest;
use App\Models\Merek;
use DB;
use App\Models\Generik;
use App\Models\AturanMinum;
use App\Models\Formula;
use App\Models\Komposisi;
use App\Models\Rak;
use App\Models\Sediaan;
use App\Models\KelasObat;
use App\Models\GolonganObat;
use App\Models\Satuan;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$mereks = Merek::with('rak.formula.komposisi.generik', 'rak.formula.komposisi.satuan')->when(request('term'), function ($query, $term) {
			$query->where('merek', 'like', "%$term%");
		})->paginate(15);

        return inertia('Mereks/Index', compact('mereks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return inertia('Mereks/Edit');
    }

    public function multiselect(Request $request)
    {
        return inertia('Mereks/Multiselect');
    }

    /**
     * @param \App\Http\Requests\MerekStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerekStoreRequest $request)
    {
        $rak = Rak::where('nomor_rak', $request->nomor_rak)->first();

        $rak->merek()->save( new Merek( $request->validated() ));

        $request->session()->flash('message', 'Merek berhasil dibuat');

        return redirect()->route('mereks.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Merek $merek
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Merek $merek)
    {
        return view('merek.show', compact('merek'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Merek $merek
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Merek $merek)
    {
        return inertia('Mereks/Edit', compact('merek'));
    }

    /**
     * @param \App\Http\Requests\MerekUpdateRequest $request
     * @param \App\Models\Merek $merek
     * @return \Illuminate\Http\Response
     */
    public function update(MerekUpdateRequest $request, Merek $merek)
    {
        $merek->update($request->validated());
        $request->session()->flash('message', $merek->merek_text . ' Berhasil diupdate');
        return redirect()->route('mereks.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Merek $merek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Merek $merek)
    {
        $request->session()->flash('message', $merek->merek_text . ' Berhasil dihapus');
        $merek->delete();
        return redirect()->route('mereks.index');
    }
}
