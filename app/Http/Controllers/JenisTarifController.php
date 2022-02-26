<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisTarifStoreRequest;
use App\Http\Requests\JenisTarifUpdateRequest;
use App\Models\JenisTarif;
use Illuminate\Http\Request;

class JenisTarifController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jenisTarifs = JenisTarif::all();

        return view('jenisTarif.index', compact('jenisTarifs'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('jenisTarif.create');
    }

    /**
     * @param \App\Http\Requests\JenisTarifStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenisTarifStoreRequest $request)
    {
        $jenisTarif = JenisTarif::create($request->validated());

        $request->session()->flash('jenisTarif.id', $jenisTarif->id);

        return redirect()->route('jenisTarif.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JenisTarif $jenisTarif
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, JenisTarif $jenisTarif)
    {
        return view('jenisTarif.show', compact('jenisTarif'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JenisTarif $jenisTarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, JenisTarif $jenisTarif)
    {
        return view('jenisTarif.edit', compact('jenisTarif'));
    }

    /**
     * @param \App\Http\Requests\JenisTarifUpdateRequest $request
     * @param \App\Models\JenisTarif $jenisTarif
     * @return \Illuminate\Http\Response
     */
    public function update(JenisTarifUpdateRequest $request, JenisTarif $jenisTarif)
    {
        $jenisTarif->update($request->validated());

        $request->session()->flash('jenisTarif.id', $jenisTarif->id);

        return redirect()->route('jenisTarif.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JenisTarif $jenisTarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, JenisTarif $jenisTarif)
    {
        $jenisTarif->delete();

        return redirect()->route('jenisTarif.index');
    }
}
