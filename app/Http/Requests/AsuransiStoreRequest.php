<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueNamaAsuransi;

class AsuransiStoreRequest extends FormRequest
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
		$asuransi =  $this->route('asuransi'); 
		$nama_validation = ['required', 'string'];
		  if (isset($asuransi)) {
			  $nama_validation[] = new UniqueNamaAsuransi($asuransi->id);
		  } else {
			  $nama_validation[] = new UniqueNamaAsuransi;
		  }
        return [
            'nama'                   => $nama_validation,
            'alamat'                 => ['nullable','string'],
            'tanggal_berakhir'       => [ 'nullable','date'],
            'alamat_penagihan'       => [ 'nullable','string'],
            'catatan_pelayanan_gigi' => [ 'nullable','string'],
            'tipe_asuransi_id'       => ['required', 'integer', 'gt:0'],
            'kali_obat'              => ['required', 'numeric'],
            'kata_kunci'             => ['nullable','string'],
            'aktif'                  => ['required', 'integer'],
            'pelunasan_transfer'     => ['required', 'integer'],
        ];
    }
}
