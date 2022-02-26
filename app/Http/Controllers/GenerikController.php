<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerikStoreRequest;
use App\Http\Requests\GenerikUpdateRequest;
use App\Models\Generik;
use Illuminate\Http\Request;

class GenerikController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $generiks = Generik::all();

        return view('generik.index', compact('generiks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('generik.create');
    }

    /**
     * @param \App\Http\Requests\GenerikStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenerikStoreRequest $request)
    {
        $generik = Generik::create($request->validated());

        $request->session()->flash('generik.id', $generik->id);

        return redirect()->route('generik.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Generik $generik
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Generik $generik)
    {
        return view('generik.show', compact('generik'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Generik $generik
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Generik $generik)
    {
        return view('generik.edit', compact('generik'));
    }

    /**
     * @param \App\Http\Requests\GenerikUpdateRequest $request
     * @param \App\Models\Generik $generik
     * @return \Illuminate\Http\Response
     */
    public function update(GenerikUpdateRequest $request, Generik $generik)
    {
        $generik->update($request->validated());

        $request->session()->flash('generik.id', $generik->id);

        return redirect()->route('generik.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Generik $generik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Generik $generik)
    {
        $generik->delete();

        return redirect()->route('generik.index');
    }
	public function ajaxOptions(Request $request, $query){

        $generiks = Generik::where('generik', 'like', '%'.$query . '%')->get();
		$ret = [];
		foreach ($generiks as $g) {
		  $ret[] = [
			'value' => $g->id,
			'label' => $g->generik
		  ];
		}
		return $ret;
	}
	
}
