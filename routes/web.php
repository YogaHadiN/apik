<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Generik;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

	Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'generiks' => Generik::when(request('term'), function ($query, $term) {
                $query->where('generik', 'like', "%$term%");
            })->limit(15)->get()
        ]);
    })->name('dashboard');

  Route::post('generiks/get/options/{query}', [\App\Http\Controllers\GenerikController::class, 'ajaxOptions']);
  Route::post('aturan_minums/get/options/{query}', [\App\Http\Controllers\AturanMinumController::class, 'ajaxOptions']);
  Route::resource('users', \App\Http\Controllers\UserController::class);
  Route::get('users/{id}/get/{name}', [\App\Http\Controllers\UserController::class, 'getImage']);
  Route::get('mereks/multiselect', [\App\Http\Controllers\MerekController::class, 'multiselect']);

  Route::get('raks/{id}/create/merek', [\App\Http\Controllers\RakController::class, 'createMerek']);
  Route::resource('raks', App\Http\Controllers\RakController::class);

  Route::resource('mereks', App\Http\Controllers\MerekController::class);
  Route::get('formulas/{id}/create/rak', [\App\Http\Controllers\RakController::class, 'create']);
  Route::resource('formulas', App\Http\Controllers\FormulaController::class);

  Route::resource('komposisis', App\Http\Controllers\KomposisiController::class);
  Route::resource('generiks', App\Http\Controllers\GenerikController::class);
  Route::resource('sediaans', App\Http\Controllers\SediaanController::class);
  Route::resource('aturan-minums', App\Http\Controllers\AturanMinumController::class);
  Route::resource('kelas-obats', App\Http\Controllers\KelasObatController::class);
  Route::resource('signas', App\Http\Controllers\SignaController::class);
  Route::resource('tarifs', App\Http\Controllers\TarifController::class);

  Route::get('pasiens/{id}/get/{name}', [\App\Http\Controllers\PasienController::class, 'getImage']);
  Route::resource('pasiens', App\Http\Controllers\PasienController::class);

  Route::get('asuransis/{id}/tarifs', [App\Http\Controllers\AsuransiController::class, 'tarif'])->name('asuransis.tarifs');
  Route::resource('asuransis', App\Http\Controllers\AsuransiController::class);
  Route::resource('tipe_tindakans', App\Http\Controllers\TipeTindakanController::class);
  Route::resource('coas', App\Http\Controllers\CoaController::class);
});




Route::resource('pasien', App\Http\Controllers\PasienController::class);


Route::resource('pasien', App\Http\Controllers\PasienController::class);
