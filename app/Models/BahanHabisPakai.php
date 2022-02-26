<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;
class BahanHabisPakai extends Model
{
    use HasFactory, BelongsToTenant;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merek_id',
        'jumlah',
        'jenis_tarif_id',
        'tenant_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
	public function merek(){
		return $this->belongsTo(Merek::class);
	}
    protected $casts = [
        'id'             => 'integer',
        'merek_id'       => 'integer',
        'jenis_tarif_id' => 'integer',
        'tenant_id'      => 'integer',
    ];
}
