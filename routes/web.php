<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AccueilController;

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


Route::get('/', [AccueilController::class, 'accueil'])->name('accueil');
Route::get('/Utilisateurs/consultUtilisateurs', [UtilisateurController::class, 'consultUtilisateurs'])->name('consultUtilisateurs');
Route::post('/Utilisateurs/ajoutUtilisateur', [UtilisateurController::class, 'ajoutUtilisateurTrait'])->name('ajoutUtilisateurTrait');
Route::get('/Utilisateurs/ajoutUtilisateur', [UtilisateurController::class, 'ajoutUtilisateur'])->name('ajoutUtilisateur');
Route::get('/Utilisateurs/modifSuppUtilisateur/{id}', [UtilisateurController::class, 'modifSuppUtilisateur'])->whereNumber('id')->name('modifSuppUtilisateur');
