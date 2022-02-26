<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RakStoreRequest extends FormRequest
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
            'harga_beli'      => ['required', 'integer'],
            'harga_jual'      => ['required', 'integer'],
            'exp_date'        => ['date'],
            'stok_minimal'    => ['required', 'integer'],
            'stok'            => ['required', 'integer'],
            'formula_id'      => ['required', 'integer', 'gt:0'],
            'kelas_obat_id'   => ['required', 'integer', 'gt:0'],
            "merek"           => "required|string",
            "unit_tiap_paket" => "required|numeric",
            "exp_date"        => "required|date_format:Y-m-d",
        ];
    }
}
