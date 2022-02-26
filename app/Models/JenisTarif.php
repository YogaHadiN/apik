<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;

class JenisTarif extends Model
{
    use HasFactory, BelongsToTenant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_tarif',
        'coa_id',
        'tenant_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'coa_id' => 'integer',
        'tenant_id' => 'integer',
    ];
    public function bahan_habis_pakai(){
        return $this->hasMany(BahanHabisPakai::class);
    }
	public function tarif(){
		return $this->hasMany(Tarif::class);
	}
	public static function boot(){
		parent::boot();
		self::deleted(function($model){
			$model->bahan_habis_pakai()->delete();
		});
	}
	
}
