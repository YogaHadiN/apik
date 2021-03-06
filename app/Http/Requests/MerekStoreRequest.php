<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerekStoreRequest extends FormRequest
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
		"merek"           => "required|string",
		"unit_tiap_paket" => "nullable|numeric",
		"rak_id"          => "nullable|numeric",
		"exp_date"        => "required|date_format:Y-m-d",
	  ];
    }
}
