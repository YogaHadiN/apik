<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienUpdateRequest extends FormRequest
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
            'nama' => ['required', 'string'],
            'nama_peserta' => ['string'],
            'nomor_asuransi' => ['string'],
            'asuransi_id' => ['required', 'integer', 'gt:0'],
            'jenis_peserta' => ['required', 'integer'],
            'sex' => ['required', 'integer'],
            'alamat' => ['required', 'string'],
            'tanggal_lahir' => ['date'],
            'nama_ayah' => ['string'],
            'nama_ibu' => ['string'],
            'image' => ['string'],
            'ktp_image' => ['string'],
            'bpjs_image' => ['string'],
            'nomor_asuransi_bpjs' => ['string'],
            'nomor_ktp' => ['string'],
            'jangan_disms' => ['required', 'integer'],
            'sudah_kontak_bulan_ini' => ['required', 'integer'],
            'prolanis_ht' => ['required', 'integer'],
            'prolanis_dm' => ['required', 'integer'],
            'prolanis_ht_flagging_image' => ['string'],
            'prolanis_dm_flagging_image' => ['string'],
            'kartu_asuransi_image' => ['string'],
        ];
    }
}
