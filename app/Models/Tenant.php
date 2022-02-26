<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenant',
        'owner_name',
        'alamat',
        'no_telp',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
	public function coa(){
		return $this->hasMany(Coa::class);
	}
	public function asuransi(){
		return $this->hasMany(Asuransi::class);
	}
	public function kelas_obat(){
		return $this->hasMany(KelasObat::class);
	}
	public function kelompok_coa(){
		return $this->hasMany(KelompokCoa::class);
	}
	public function role(){
		return $this->hasMany(Role::class);
	}
	public function satuan(){
		return $this->hasMany(Satuan::class);
	}
	public function aturan_minum(){
		return $this->hasMany(AturanMinum::class);
	}
	public function sediaan(){
		return $this->hasMany(Sediaan::class);
	}
	public function tipe_asuransi(){
		return $this->hasMany(TipeAsuransi::class);
	}
	public function tipe_tindakan(){
		return $this->hasMany(TipeTindakan::class);
	}
	public function titel(){
		return $this->hasMany(Titel::class);
	}
	public function jenis_tarif(){
		return $this->hasMany(JenisTarif::class);
	}
	public function tarif(){
		return $this->hasMany(Tarif::class);
	}

}
