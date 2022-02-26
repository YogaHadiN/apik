<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KomposisiStoreRequest extends FormRequest
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
            'generik_id' => ['required', 'integer'],
            'bobot' => ['required', 'string'],
            'satuan_id' => ['required', 'integer', 'gt:0'],
            'formula_id' => ['required', 'integer', 'gt:0'],
            'tenant_id' => ['required', 'integer', 'gt:0'],
        ];
    }
}
