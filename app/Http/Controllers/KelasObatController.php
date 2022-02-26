<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasObatStoreRequest;
use App\Http\Requests\KelasObatUpdateRequest;
use App\Models\KelasObat;
use Illuminate\Http\Request;

class KelasObatController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kelasObats = KelasObat::all();

        return view('kelasObat.index', compact('kelasObats'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('kelasObat.create');
    }

    /**
     * @param \App\Http\Requests\KelasObatStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasObatStoreRequest $request)
    {
        $kelasObat = KelasObat::create($request->validated());

        $request->session()->flash('kelasObat.id', $kelasObat->id);

        return redirect()->route('kelasObat.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\KelasObat $kelasObat
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, KelasObat $kelasObat)
    {
        return view('kelasObat.show', compact('kelasObat'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\KelasObat $kelasObat
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, KelasObat $kelasObat)
    {
        return view('kelasObat.edit', compact('kelasObat'));
    }

    /**
     * @param \App\Http\Requests\KelasObatUpdateRequest $request
     * @param \App\Models\KelasObat $kelasObat
     * @return \Illuminate\Http\Response
     */
    public function update(KelasObatUpdateRequest $request, KelasObat $kelasObat)
    {
        $kelasObat->update($request->validated());

        $request->session()->flash('kelasObat.id', $kelasObat->id);

        return redirect()->route('kelasObat.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\KelasObat $kelasObat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, KelasObat $kelasObat)
    {
        $kelasObat->delete();

        return redirect()->route('kelasObat.index');
    }
}
