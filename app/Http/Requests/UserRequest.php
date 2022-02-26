<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UserRequest extends FormRequest
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
	  $user =  $this->route('user'); 
		if (isset($user)) {
			$email_validation =  'required|string|email|max:255|unique:users,email,' . $user->id;
			$password_validation = ['nullable', 'confirmed', Rules\Password::defaults()];
		} else {
			$email_validation =  'required|string|email|max:255|unique:users';
			$password_validation = ['required', 'confirmed', Rules\Password::defaults()];
		}
        return [
			'name'                           => 'required|string|max:255',
			'email'                          => $email_validation,
			'password'                       => $password_validation,
			'email_verified_at'              => ['nullable'],
			'alamat_domisili'                => ['nullable'],
			'alamat_ktp'                     => ['nullable'],
			'titel_id'                       => ['required'],
			'no_ktp'                         => ['nullable'],
			'no_str'                         => ['nullable'],
			'no_hp'                          => ['nullable'],
			'universitas_asal'               => ['nullable'],
			'tanggal_lulus'                  => ['nullable', 'date_format:Y-m-d'],
			'tanggal_lahir'                  => ['nullable', 'date_format:Y-m-d'],
			'tanggal_mulai'                  => ['nullable', 'date_format:Y-m-d'],
			'photo'                          => ['nullable'],
			'phones'                          => ['required', 'array'],
			'photo_mime_type'                => ['nullable'],
			'ktp_image'                      => ['nullable'],
			'ktp_image_mime_type'            => ['nullable'],
			'str_image'                      => ['nullable'],
			'str_image_mime_type'            => ['nullable'],
			'npwp_image'                     => ['nullable'],
			'npwp_image_mime_type'           => ['nullable'],
			'sip_image'                      => ['nullable'],
			'sip_image_mime_type'            => ['nullable'],
			'kartu_keluarga_image'           => ['nullable'],
			'kartu_keluarga_image_mime_type' => ['nullable'],
			'menikah'                        => ['required'],
			'npwp'                           => ['nullable'],
			'jumlah_anak'                    => ['nullable', 'integer'],
			'jenis_kelamin'                  => ['required'],
			'nomor_rekening'                 => ['nullable'],
			'bank'                           => ['nullable'],
			'gaji_tetap'                     => ['nullable', 'integer'],
			'role_id'                        => ['required'],
			'active'                         => ['required'],
        ];
    }
}
