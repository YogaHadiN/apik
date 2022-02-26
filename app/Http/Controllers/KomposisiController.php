<?php

namespace App\Http\Controllers;

use App\Http\Requests\KomposisiStoreRequest;
use App\Http\Requests\KomposisiUpdateRequest;
use App\Models\Komposisi;
use Illuminate\Http\Request;

class KomposisiController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $komposisis = Komposisi::all();

        return view('komposisi.index', compact('komposisis'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('komposisi.create');
    }

    /**
     * @param \App\Http\Requests\KomposisiStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(KomposisiStoreRequest $request)
    {
        $komposisi = Komposisi::create($request->validated());

        $request->session()->flash('komposisi.id', $komposisi->id);

        return redirect()->route('komposisi.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Komposisi $komposisi
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Komposisi $komposisi)
    {
        return view('komposisi.show', compact('komposisi'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Komposisi $komposisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Komposisi $komposisi)
    {
        return view('komposisi.edit', compact('komposisi'));
    }

    /**
     * @param \App\Http\Requests\KomposisiUpdateRequest $request
     * @param \App\Models\Komposisi $komposisi
     * @return \Illuminate\Http\Response
     */
    public function update(KomposisiUpdateRequest $request, Komposisi $komposisi)
    {
        $komposisi->update($request->validated());

        $request->session()->flash('komposisi.id', $komposisi->id);

        return redirect()->route('komposisi.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Komposisi $komposisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Komposisi $komposisi)
    {
        $komposisi->delete();

        return redirect()->route('komposisi.index');
    }
}
