<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;
use App\Models\BahanHabisPakai;

class Tarif extends Model
{
    use HasFactory, BelongsToTenant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_tarif_id',
        'biaya',
        'asuransi_id',
        'fee_dokter',
        'fee_asisten_tindakan',
        'tipe_tindakan_id',
        'bhp_items',
        'tenant_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public function jenis_tarif(){
        return $this->belongsTo(JenisTarif::class);
    }

    public function getBhpsAttribute(){
		return $this->jenis_tarif->bahan_habis_pakai;
    }
    public function tipe_tindakan(){
        return $this->belongsTo(TipeTindakan::class);
    }

    protected $casts = [
        'id'               => 'integer',
        'jenis_tarif_id'   => 'integer',
        'asuransi_id'      => 'integer',
        'tipe_tindakan_id' => 'integer',
        'tenant_id'        => 'integer',
    ];
	public static function boot(){
		parent::boot();
		self::deleted(function($model){
		  $model->jenis_tarif->tarif()->delete();
		  $model->jenis_tarif->delete();
		});
	}
}
