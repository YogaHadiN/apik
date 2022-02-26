<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generik extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'generik',
        'pregnancy_safety_index',
        'peroral',
        'parenteral',
        'topical',
        'opthalmic',
        'vaginal',
        'inhalation',
        'lingual',
        'transdermal',
        'nasal',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
