<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;
use Session;

class Rak extends Model
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
        'id'                => 'integer',
        'exp_date'          => 'date',
        'fornas'            => 'integer',
        'formula_id'        => 'integer',
        'alternatif_fornas' => 'integer',
        'kelas_obat_id'     => 'integer',
        'tenant_id'         => 'integer',
    ];
	public function formula(){
		return $this->belongsTo(Formula::class);
	}
	public function merek(){
		return $this->hasMany(Merek::class);
	}
	public static function boot(){
		parent::boot();
		self::creating(function($rak){
			if ( !is_null( Rak::where('nomor_rak', $rak)->first() ) ) {
				Session::flash('bannerStyle', 'danger');
				Session::flash('message', 'Rak gagal dibuat karena sudah ada rak yang sama');
				return false;
			}
			return true;
		});
		self::deleting(function($rak){
			// gagalkan jika masih ada merek yang menaunginya
			if ( Merek::where('rak_id', $rak->id)->count() ) {
				Session::flash('bannerStyle', 'danger');
				Session::flash('message', 'Rak Gagal dihapus, karena masih ada Merek yang dinaunginya');
				return false;
			}
			// gagalkan jika merupakan satu2 nya rak di formula itu
			if ( Rak::where('formula_id', $rak->formula_id)->count() < 2) {
				Formula::destroy( $rak->formula_id );
			}
			return true;
		});
		self::deleted(function($rak){
			// gagalkan jika merupakan satu2 nya rak di formula itu
			if ( !Rak::where('formula_id', $rak->formula_id)->count() ) {
				Formula::destroy( $rak->formula_id );
			}
			return true;
		});
	}
}
