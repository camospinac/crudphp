<?php

use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CamaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\VisitaController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::resource('hospitals', HospitalController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('camas', CamaController::class);
Route::resource('rols', RolController::class);
Route::resource('ciudads', CiudadController::class);
Route::resource('personas', PersonaController::class);
Route::resource('visitas', VisitaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
