<?php

use App\Http\Controllers\AnnonceCovoitController;
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


Route::get('/Annonces', [AnnonceCovoitController::class, 'index'])->name('ConsultationAnnnonces');
Route::get('/Annonces/Rechercher', [AnnonceCovoitController::class, 'rechercher'])->name('ConsultationAnnnonces2');

Route::get('/Annonces/Rechercher', [AnnonceCovoitController::class, 'RecupVilles'])->name('recupVille');


Route::post('/Annonces', [AnnonceCovoitController::class, 'index'])->name('annonces.rechercher');