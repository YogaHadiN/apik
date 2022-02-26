<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignaStoreRequest;
use App\Http\Requests\SignaUpdateRequest;
use App\Models\Signa;
use Illuminate\Http\Request;

class SignaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $signas = Signa::all();

        return view('signa.index', compact('signas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('signa.create');
    }

    /**
     * @param \App\Http\Requests\SignaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignaStoreRequest $request)
    {
        $signa = Signa::create($request->validated());

        $request->session()->flash('signa.id', $signa->id);

        return redirect()->route('signa.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Signa $signa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Signa $signa)
    {
        return view('signa.show', compact('signa'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Signa $signa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Signa $signa)
    {
        return view('signa.edit', compact('signa'));
    }

    /**
     * @param \App\Http\Requests\SignaUpdateRequest $request
     * @param \App\Models\Signa $signa
     * @return \Illuminate\Http\Response
     */
    public function update(SignaUpdateRequest $request, Signa $signa)
    {
        $signa->update($request->validated());

        $request->session()->flash('signa.id', $signa->id);

        return redirect()->route('signa.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Signa $signa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Signa $signa)
    {
        $signa->delete();

        return redirect()->route('signa.index');
    }
}
