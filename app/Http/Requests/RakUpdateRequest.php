<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RakUpdateRequest extends FormRequest
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
            'harga_beli'        => ['required', 'integer'],
            'harga_jual'        => ['required', 'integer'],
            'stok_minimal'      => ['required', 'integer'],
            'stok'              => ['required', 'integer'],
            'kelas_obat_id'     => ['required', 'integer', 'gt:0']
        ];
    }
}
