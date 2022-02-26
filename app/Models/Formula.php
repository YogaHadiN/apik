<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\BelongsToTenant;
use Session;

class Formula extends Model
{
    use HasFactory, BelongsToTenant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'               => 'integer',
        'dijual_bebas'     => 'integer',
        'sediaan_id'       => 'integer',
        'tidak_dipuyer'    => 'integer',
        'golongan_obat_id' => 'integer',
        'tenant_id'        => 'integer',
    ];
	public function rak(){
		return $this->hasMany(Rak::class);
	}
	public function komposisi(){
		return $this->hasMany(Komposisi::class);
	}
	public function sediaan(){
		return $this->belongsTo(Sediaan::class);
	}

	public function aturan_minum(){
		return $this->belongsTo(AturanMinum::class);
	}

    public function setKomposisisAttribute($value)
    {
        $this->attributes['formula_json'] = $this->komposisiSortedWithSediaan($value, $this->sediaan_id);
    }
	

	public function getMerekAttribute()
    {
	  $raks = $this->rak;

	  $mereks = [];
	  foreach ($raks as $rak) {
		foreach ($rak->merek as $m) {
			$mereks[] = $m;
		}
	  }
	  return $mereks;
    }


	public function getKomposisisAttribute(){
		$komposisis = [];
		foreach ($this->komposisi as $komposisi) {
			$komposisis[] = [
				'generik_id' => $komposisi->generik_id,
				'generik'    => $komposisi->generik->generik,
				'bobot'      => $komposisi->bobot,
				'satuan'     => $komposisi->satuan->satuan,
				'satuan_id'  => $komposisi->satuan_id
			];
		}
		return $komposisis;
	}
	


	public function komposisiSortedWithSediaan($komposisi, $sediaan_id){
        usort($komposisi, function($a, $b) {
            return $a['generik_id'] <=> $b['generik_id'];
        });

		return json_encode([ 'sediaan_id' => (int) $sediaan_id, 'komposisi'  => $this->komposisiUnsorted($komposisi) ]);
	}

    /**
     * undocumented function
     *
     * @return void
     */
    public function komposisiUnsorted($komposisi)
    {
        $komposisi_array = [];
        foreach ($komposisi as $k) {
            $komposisi_array[] = [
                'generik_id' => $k['generik_id'],
                'bobot'      => $k['bobot'],
                'satuan_id'  => $k['satuan_id'],
            ];
        }
		return $komposisi_array;
    }

	public static function boot(){
		parent::boot();
		self::deleting(function($formula){
			// gagalkan jika merupakan satu2 nya rak di formula itu
			if ( $formula->rak->count() < 1 ) {
				Session::flash('bannerStyle', 'danger');
				Session::flash('message', 'Formula Gagal dihapus, karena masih ada Rak yang dinaunginya');
				return false;
			}
		});
		self::deleted(function($formula){
			// gagalkan jika merupakan satu2 nya rak di formula itu
			$formula->komposisi()->delete();
		});
	}
	
}
