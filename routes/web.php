<?php

use App\Http\Controllers\ConsultationAnnonceCovoitController;
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
    return view('template');
});

Route::get('/Annonces', [ConsultationAnnonceCovoitController::class, 'index'])->name('ConsultationAnnnonces');
Route::get('/Annonces/Rechercher', [ConsultationAnnonceCovoitController::class, 'rechercher'])->name('ConsultationAnnnonces2');
Route::post('/Annonces', [ConsultationAnnonceCovoitController::class, 'index'])->name('annonces.rechercher');