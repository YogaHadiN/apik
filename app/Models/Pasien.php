<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                     => 'integer',
        'asuransi_id'            => 'integer',
        'sex'                    => 'integer',
        'jangan_disms'           => 'integer',
        'sudah_kontak_bulan_ini' => 'integer',
        'prolanis_ht'            => 'integer',
        'prolanis_dm'            => 'integer',
    ];
    protected $dates = [
        'tanggal_lahir'
    ];

    public function asuransi(){
        return $this->belongsTo(Asuransi::class);
    }
    public function setAsuransiIdAttribute($value)
    {
        if (empty($value)) {
            $this->attributes['asuransi_id'] = Asuransi::where('nama', 'Biaya Pribadi')->first()->id;
        } else {
            $this->attributes['asuransi_id'] = $value;
        }
    }
    public function setJenisPesertaAttribute($value)
    {
        if (empty($value)) {
            $this->attributes['jenis_peserta'] = 1;
        } else {
            $this->attributes['jenis_peserta'] = $value;
        }
    }
    public function setNamaPesertaAttribute($value)
    {
        if (empty($value)) {
            $this->attributes['nama_peserta'] = $this->nama;
        }  else {
            $this->attributes['nama_peserta'] = $value;
        }
    }
    public function setNomorAsuransiAttribute($value)
    {
        $this->attributes['nomor_asuransi'] = $value;
        if ( 
            !is_null(Asuransi::find( $this->asuransi_id )) &&
            Asuransi::find( $this->asuransi_id )->nama == 'BPJS' 
        ) {
            $this->attributes['nomor_asuransi_bpjs'] = $value;
        }
    }

	public function uploadImage($value) {
        $filepath  = 'img/pasiens/';
        return uploadFileToS3($value, $filepath);
	}

    public function setKartuKeluargaImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['kartu_keluarga_image'] = $image['fullpath'];
            $this->attributes['kartu_keluarga_image_mime_type'] = $image['mime_type'];
        }
    }
    
    public function setImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['image'] = $image['fullpath'];
            $this->attributes['image_mime_type'] = $image['mime_type'];
        }
    }
    public function setKtpImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['ktp_image'] = $image['fullpath'];
            $this->attributes['ktp_image_mime_type'] = $image['mime_type'];
        }
    }
    public function setBpjsImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['bpjs_image'] = $image['fullpath'];
            $this->attributes['bpjs_image_mime_type'] = $image['mime_type'];
        }
    }
    public function setProlanisHtFlaggingImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['prolanis_ht_flagging_image'] = $image['fullpath'];
            $this->attributes['prolanis_ht_flagging_image_mime_type'] = $image['mime_type'];
        }
    }
    public function setProlanisDmFlaggingImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['prolanis_dm_flagging_image'] = $image['fullpath'];
            $this->attributes['prolanis_dm_flagging_image_mime_type'] = $image['mime_type'];
        }
    }
    public function setKartuAsuransiImageAttribute($value)
    {
        $image = $this->uploadImage($value);
        if (!is_null($image)) {
            $this->attributes['kartu_asuransi_image'] = $image['fullpath'];
            $this->attributes['kartu_asuransi_image_mime_type'] = $image['mime_type'];
        }
    }
}
