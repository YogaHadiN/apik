<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;

class Coa extends Model
{
    use HasFactory, BelongsToTenant;

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
        'id'              => 'integer',
        'kelompok_coa_id' => 'integer',
    ];

    public function jenis_tarif(){
        return $this->hasOne(JenisTarif::class);
    }

    public function asuransi(){
        return $this->hasOne(Asuransi::class);
    }
}
