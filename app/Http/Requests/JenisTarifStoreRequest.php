<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JenisTarifStoreRequest extends FormRequest
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
            'jenis_tarif' => ['required', 'string'],
            'coa_id' => ['required', 'integer', 'gt:0'],
            'tenant_id' => ['required', 'integer', 'gt:0'],
        ];
    }
}
