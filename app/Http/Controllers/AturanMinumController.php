<?php

namespace App\Http\Controllers;

use App\Http\Requests\AturanMinumStoreRequest;
use App\Http\Requests\AturanMinumUpdateRequest;
use App\Models\AturanMinum;
use Illuminate\Http\Request;

class AturanMinumController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aturanMinums = AturanMinum::all();

        return view('aturanMinum.index', compact('aturanMinums'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('aturanMinum.create');
    }

    /**
     * @param \App\Http\Requests\AturanMinumStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AturanMinumStoreRequest $request)
    {
        $aturanMinum = AturanMinum::create($request->validated());

        $request->session()->flash('aturanMinum.id', $aturanMinum->id);

        return redirect()->route('aturanMinum.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AturanMinum $aturanMinum
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, AturanMinum $aturanMinum)
    {
        return view('aturanMinum.show', compact('aturanMinum'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AturanMinum $aturanMinum
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, AturanMinum $aturanMinum)
    {
        return view('aturanMinum.edit', compact('aturanMinum'));
    }

    /**
     * @param \App\Http\Requests\AturanMinumUpdateRequest $request
     * @param \App\Models\AturanMinum $aturanMinum
     * @return \Illuminate\Http\Response
     */
    public function update(AturanMinumUpdateRequest $request, AturanMinum $aturanMinum)
    {
        $aturanMinum->update($request->validated());

        $request->session()->flash('aturanMinum.id', $aturanMinum->id);

        return redirect()->route('aturanMinum.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AturanMinum $aturanMinum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, AturanMinum $aturanMinum)
    {
        $aturanMinum->delete();
        return redirect()->route('aturanMinum.index');
    }
	public function ajaxOptions($query){
		$aturan_minums = AturanMinum::where('aturan_minum', 'like', '%' . $query . '%')->get();
		$res           = [];
        foreach ($aturan_minums as $am) {
            $res[]=[
                'value' => (string) $am->id,
                'label' => $am->aturan_minum
            ];
        }
        return $res;
	}
	
}
