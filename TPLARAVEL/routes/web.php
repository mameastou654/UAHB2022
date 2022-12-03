<?php

use App\Http\Controllers\EntrepriseController;
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
Route::resource('filieres', App\Http\Controllers\FiliereController::class);
Route::resource('evoluers', App\Http\Controllers\EvoluerController::class);
Route::resource('entreprises', App\Http\Controllers\EntrepriseController::class);
Route::resource('etudiants', App\Http\Controllers\EtudiantController::class);
