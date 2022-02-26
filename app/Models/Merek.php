<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;

class Merek extends Model
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
        'id'        => 'integer',
        'tenant_id' => 'integer',
    ];
    protected $appends = ['merek_text'];

    public function rak(){
        return $this->belongsTo(Rak::class);
    }

	public function getMerekTextAttribute()
    {
        $komposisis = $this->rak->formula->komposisi;
        if ($komposisis->count() ==  1) {
            return ucfirst($this->merek) . ' ' . $this->rak->formula->sediaan->sediaan .' '. $komposisis->first()->bobot . ' ' . $komposisis->first()->satuan->satuan;
        }
        return ucfirst($this->merek);
    }

    public function setMerekAttribute($value)
    {
        $this->attributes['merek'] = ucfirst($value);
    }
	public static function boot(){
		parent::boot();
		self::deleted(function($merek){
		  //jika merupakan merek terakhir di rak itu, hapus rak dan formula sekaligus
			$rak = Rak::find($merek->rak_id);
			if ( $rak->merek->count() < 1 ) {
				$formula_id = $rak->formula_id;
				$rak->delete();
			}
		});
	}
	
}
