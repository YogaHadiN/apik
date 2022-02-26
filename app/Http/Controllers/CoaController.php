<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoaStoreRequest;
use App\Http\Requests\CoaUpdateRequest;
use App\Models\Coa;
use Illuminate\Http\Request;

class CoaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coas = Coa::all();

        return view('coa.index', compact('coas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('coa.create');
    }

    /**
     * @param \App\Http\Requests\CoaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoaStoreRequest $request)
    {
        $coa = Coa::create($request->validated());

        $request->session()->flash('coa.id', $coa->id);

        return redirect()->route('coa.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Coa $coa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Coa $coa)
    {
        return view('coa.show', compact('coa'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Coa $coa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Coa $coa)
    {
        return view('coa.edit', compact('coa'));
    }

    /**
     * @param \App\Http\Requests\CoaUpdateRequest $request
     * @param \App\Models\Coa $coa
     * @return \Illuminate\Http\Response
     */
    public function update(CoaUpdateRequest $request, Coa $coa)
    {
        $coa->update($request->validated());

        $request->session()->flash('coa.id', $coa->id);

        return redirect()->route('coa.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Coa $coa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Coa $coa)
    {
        $coa->delete();

        return redirect()->route('coa.index');
    }
}
