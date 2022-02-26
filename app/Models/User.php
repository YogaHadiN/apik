<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\BelongsToTenant;
use Auth;
use Storage;
use Session;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, BelongsToTenant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function titel(){
        return $this->belongsTo(Titel::class);
    }

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
    public function setPhotoAttribute($value)
    {
        $image = $this->uploadImage($value, 'photo');
        if (!is_null($image)) {
            $this->attributes['photo']           = $image['fullpath'];
            $this->attributes['photo_mime_type'] = $image['mime_type'];
        }
    }

    public function setStrImageAttribute($value)
    {
        $image = $this->uploadImage($value, 'str_image');
        if (!is_null($image)) {
            $this->attributes['str_image']           = $image['fullpath'];
            $this->attributes['str_image_mime_type'] = $image['mime_type'];
        }
    }

    public function setKtpImageAttribute($value)
    {
        $image = $this->uploadImage($value, 'ktp_image');
        if (!is_null($image)) {
            $this->attributes['ktp_image']           = $image['fullpath'];
            $this->attributes['ktp_image_mime_type'] = $image['mime_type'];
        }
    }

    public function setNpwpImageAttribute($value)
    {
        $image = $this->uploadImage($value, 'npwp_image');
        if (!is_null($image)) {
            $this->attributes['npwp_image']           = $image['fullpath'];
            $this->attributes['npwp_image_mime_type'] = $image['mime_type'];
        }
    }
    public function setSipImageAttribute($value)
    {
        $image = $this->uploadImage($value, 'sip_image');
        if (!is_null($image)) {
            $this->attributes['sip_image']           = $image['fullpath'];
            $this->attributes['sip_image_mime_type'] = $image['mime_type'];
        }
    }

    public function setKartuKeluargaImageAttribute($value)
    {

        $image = $this->uploadImage($value, 'kartu_keluarga_image');
        if (!is_null($image)) {
            $this->attributes['kartu_keluarga_image']           = $image['fullpath'];
            $this->attributes['kartu_keluarga_image_mime_type'] = $image['mime_type'];
        }
    }


	public function setMimeType($name){
		$image_name = str_replace("_mime_type","", $name);
	}
	
	public function uploadImage($value, $name) {
        $filepath  = 'img/users/' .  $name . '/';
        return uploadFileToS3($value, $filepath);
	}
	public static function boot(){
		parent::boot();
		self::deleting(function($user){
            if ( $user->id == Auth::id() ) {
                Session::flash('bannerStyle', 'danger');
                Session::flash('message', 'Tidak bisa menghapus User yang aktif');
                return false;
            }
		});
	}
    public function phones(){
        return $this->morphMany(Phone::class, 'phoneable');
    }
}
