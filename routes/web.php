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

Route::get('/', function () {
    return view('/Accueil/accueil');
});
Route::get('/Utilisateurs/consultUtilisateurs' , [UtilisateurController::class, 'consultUtilisateurs']);
Route::get('/Utilisateurs/modifSuppUtilisateur/{id}' , [UtilisateurController::class, 'modifSuppUtilisateur'])-> whereNumber('id');
