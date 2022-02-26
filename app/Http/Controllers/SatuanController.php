<?php

namespace App\Http\Controllers;

use App\Http\Requests\SatuanStoreRequest;
use App\Http\Requests\SatuanUpdateRequest;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $satuans = Satuan::all();

        return view('satuan.index', compact('satuans'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('satuan.create');
    }

    /**
     * @param \App\Http\Requests\SatuanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SatuanStoreRequest $request)
    {
        $satuan = Satuan::create($request->validated());

        $request->session()->flash('satuan.id', $satuan->id);

        return redirect()->route('satuan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Satuan $satuan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Satuan $satuan)
    {
        return view('satuan.show', compact('satuan'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Satuan $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Satuan $satuan)
    {
        return view('satuan.edit', compact('satuan'));
    }

    /**
     * @param \App\Http\Requests\SatuanUpdateRequest $request
     * @param \App\Models\Satuan $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(SatuanUpdateRequest $request, Satuan $satuan)
    {
        $satuan->update($request->validated());

        $request->session()->flash('satuan.id', $satuan->id);

        return redirect()->route('satuan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Satuan $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Satuan $satuan)
    {
        $satuan->delete();

        return redirect()->route('satuan.index');
    }
}
