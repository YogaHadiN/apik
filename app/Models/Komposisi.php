<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;

class Komposisi extends Model
{
    use HasFactory, BelongsToTenant;

    protected $fillable = [
        'generik_id',
        'bobot',
        'satuan_id',
        'formula_id',
        'tenant_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'satuan_id' => 'integer',
        'formula_id' => 'integer',
        'tenant_id' => 'integer',
    ];

	public function generik(){
		return $this->belongsTo(Generik::class);
	}
	public function satuan(){
		return $this->belongsTo(Satuan::class);
	}

	public function formula(){
		return $this->belongsTo(Formula::class);
	}
}
