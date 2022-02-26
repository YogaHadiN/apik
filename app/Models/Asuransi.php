<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;

class Asuransi extends Model
{
    use HasFactory, BelongsToTenant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_berakhir',
        'alamat_penagihan',
        'catatan_pelayanan_gigi',
        'tipe_asuransi_id',
        'kali_obat',
        'coa_id',
        'kata_kunci',
        'aktif',
        'pelunasan_transfer',
        'tenant_id',
    ];

    public function phones(){
        return $this->morphMany(Phone::class, 'phoneable');
    }
    public function emails(){
        return $this->morphMany(Email::class, 'emailable');
    }
	public function tarif(){
		return $this->hasMany(Tarif::class);
	}

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                 => 'integer',
        'tanggal_berakhir'   => 'date',
        'tipe_asuransi_id'   => 'integer',
        'kali_obat'          => 'double',
        'coa_id'             => 'integer',
        'aktif'              => 'integer',
        'pelunasan_transfer' => 'integer',
        'tenant_id'          => 'integer',
    ];
	public function coa(){
		return $this->belongsTo(Coa::class);
	}
    public static function boot(){
        parent::boot();
        self::deleted(function($model){
            $model->phones()->delete();
            $model->emails()->delete();
            $model->coa()->delete();
        });
    }

    
}
