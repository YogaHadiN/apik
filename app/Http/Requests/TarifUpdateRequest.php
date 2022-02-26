<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TarifUpdateRequest extends FormRequest
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
            'jenis_tarif_id' => ['required', 'integer', 'gt:0'],
            'biaya' => ['required', 'integer'],
            'asuransi_id' => ['required', 'integer', 'gt:0'],
            'fee_dokter' => ['required', 'integer'],
            'fee_asisten_tindakan' => ['required', 'integer'],
            'tipe_tindakan_id' => ['required', 'integer', 'gt:0'],
            'bhp_items' => ['string'],
            'tenant_id' => ['required', 'integer', 'gt:0'],
        ];
    }
}
