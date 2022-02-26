<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NamaIbuHarusDiisi;
use App\Rules\NamaAyahHarusDiisi;

class PasienStoreRequest extends FormRequest
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
            'nama'                       => ['required', 'string'],
            'nama_peserta'               => ['nullable','string'],
            'nomor_asuransi'             => ['nullable','string'],
            'asuransi_id'                => ['nullable', 'integer', 'gt:0'],
            'jenis_peserta'              => ['nullable', 'integer'],
            'sex'                        => ['required', 'integer'],
            'alamat'                     => ['nullable', 'string'],
            'tanggal_lahir'              => ['nullable','date'],
            'nama_ayah'                  => [
                new NamaAyahHarusDiisi( request('nama_ibu'), request('tanggal_lahir') )
                                            ],
            'nama_ibu'                   => [
                new NamaIbuHarusDiisi( request('nama_ayah'), request('tanggal_lahir') )
            ],
            'nomor_asuransi_bpjs'        => ['nullable','string'],
            'nomor_ktp'                  => ['nullable','string'],
            'jangan_disms'               => ['required', 'integer'],
            'prolanis_ht'                => ['required', 'integer'],
            'prolanis_dm'                => ['required', 'integer'],
            'image'                      => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'ktp_image'                  => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'bpjs_image'                 => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'prolanis_ht_flagging_image' => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'prolanis_dm_flagging_image' => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'kartu_asuransi_image'       => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
