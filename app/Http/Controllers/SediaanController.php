<?php

namespace App\Http\Controllers;

use App\Http\Requests\SediaanStoreRequest;
use App\Http\Requests\SediaanUpdateRequest;
use App\Models\Sediaan;
use Illuminate\Http\Request;

class SediaanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sediaans = Sediaan::all();

        return view('sediaan.index', compact('sediaans'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('sediaan.create');
    }

    /**
     * @param \App\Http\Requests\SediaanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SediaanStoreRequest $request)
    {
        $sediaan = Sediaan::create($request->validated());

        $request->session()->flash('sediaan.id', $sediaan->id);

        return redirect()->route('sediaan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sediaan $sediaan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Sediaan $sediaan)
    {
        return view('sediaan.show', compact('sediaan'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sediaan $sediaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Sediaan $sediaan)
    {
        return view('sediaan.edit', compact('sediaan'));
    }

    /**
     * @param \App\Http\Requests\SediaanUpdateRequest $request
     * @param \App\Models\Sediaan $sediaan
     * @return \Illuminate\Http\Response
     */
    public function update(SediaanUpdateRequest $request, Sediaan $sediaan)
    {
        $sediaan->update($request->validated());

        $request->session()->flash('sediaan.id', $sediaan->id);

        return redirect()->route('sediaan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sediaan $sediaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sediaan $sediaan)
    {
        $sediaan->delete();

        return redirect()->route('sediaan.index');
    }
}
