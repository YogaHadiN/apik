<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaUpdateRequest extends FormRequest
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
            'indikasi'         => ['nullable','string'],
            'kontraindikasi'   => ['nullable','string'],
			'fornas'           => ['required', 'integer'],
            'efek_samping'     => ['nullable','string'],
            'dijual_bebas'     => ['required', 'integer'],
            'sediaan_id'       => ['required', 'integer', 'gt:0'],
            'aturan_minum_id'  => ['string'],
            'peringatan'       => ['nullable','string'],
            'boleh_dipuyer'    => ['required', 'integer'],
            'komposisis'       => ['nullable','array'],
            'golongan_obat_id' => ['integer', 'gt:0'],
        ];
    }
}
