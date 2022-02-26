<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipeTindakanStoreRequest;
use App\Http\Requests\TipeTindakanUpdateRequest;
use App\Models\TipeTindakan;
use Illuminate\Http\Request;

class TipeTindakanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipeTindakans = TipeTindakan::all();

        return view('tipeTindakan.index', compact('tipeTindakans'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tipeTindakan.create');
    }

    /**
     * @param \App\Http\Requests\TipeTindakanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipeTindakanStoreRequest $request)
    {
        $tipeTindakan = TipeTindakan::create($request->validated());

        $request->session()->flash('tipeTindakan.id', $tipeTindakan->id);

        return redirect()->route('tipeTindakan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TipeTindakan $tipeTindakan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TipeTindakan $tipeTindakan)
    {
        return view('tipeTindakan.show', compact('tipeTindakan'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TipeTindakan $tipeTindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, TipeTindakan $tipeTindakan)
    {
        return view('tipeTindakan.edit', compact('tipeTindakan'));
    }

    /**
     * @param \App\Http\Requests\TipeTindakanUpdateRequest $request
     * @param \App\Models\TipeTindakan $tipeTindakan
     * @return \Illuminate\Http\Response
     */
    public function update(TipeTindakanUpdateRequest $request, TipeTindakan $tipeTindakan)
    {
        $tipeTindakan->update($request->validated());

        $request->session()->flash('tipeTindakan.id', $tipeTindakan->id);

        return redirect()->route('tipeTindakan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TipeTindakan $tipeTindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TipeTindakan $tipeTindakan)
    {
        $tipeTindakan->delete();

        return redirect()->route('tipeTindakan.index');
    }
}
