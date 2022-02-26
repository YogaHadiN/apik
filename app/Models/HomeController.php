<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Generik;

class HomeController extends Model
{
    use HasFactory;

	public function index(){
        return Inertia::render('/dashboard', [
            'generiks' => Generik::when(request('term'), function ($query, $term) {
                $query->where('generik', 'like', "%$term%");
            })->limit(15)->get()
        ]);
	}
	
}
