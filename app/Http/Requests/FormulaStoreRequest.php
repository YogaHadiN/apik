<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NomorRakUnik;
use App\Rules\KomposisiFormulaUnik;

class FormulaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
	  return [

		  'nomor_rak'                  => [ 
			  'required',
			  'string',
			  new NomorRakUnik,
		  ],
		"merek"             => "required|string",
		"unit_tiap_paket"   => "nullable|numeric",
		"harga_beli"        => "required|numeric",
		"harga_jual"        => "required|numeric",
		"exp_date"          => "required|date_format:Y-m-d",
		"fornas"            => "required|numeric",
		"stok_minimal"      => "nullable|numeric",
		"stok"              => "required|numeric",
		"kelas_obat_id"     => "required|numeric",
		"indikasi"          => "nullable|string",
		"kontraindikasi"    => "nullable|string",
		"efek_samping"      => "nullable|string",
		"dijual_bebas"      => "required|numeric",
		"sediaan_id"        => "required|numeric",
		"aturan_minum_id"   => "required|numeric",
		"peringatan"        => "nullable|string",
		"boleh_dipuyer"     => "required|numeric",
		"komposisis"        => ['required',"array", new KomposisiFormulaUnik(request()->sediaan_id)]
	  ];
    }
}
