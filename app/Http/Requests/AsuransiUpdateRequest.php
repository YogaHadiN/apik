<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsuransiUpdateRequest extends FormRequest
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
            'nama'                   => ['required', 'string'],
            'alamat'                 => ['string'],
            'tanggal_berakhir'       => ['date'],
            'alamat_penagihan'       => ['string'],
            'catatan_pelayanan_gigi' => ['string'],
            'tipe_asuransi_id'       => ['required', 'integer', 'gt:0'],
            'kali_obat'              => ['required', 'numeric'],
            'coa_id'                 => ['required', 'integer', 'gt:0'],
            'kata_kunci'             => ['string'],
            'aktif'                  => ['required', 'integer'],
            'pelunasan_transfer'     => ['required', 'integer']
        ];
    }
}
