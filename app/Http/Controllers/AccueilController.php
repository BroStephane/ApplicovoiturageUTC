<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    #La fonction permet d'afficher la page d'accueil
    public function accueil()
    {
        #renvoie la vue accueil situé dans ressource/Accueil
        return view('/Accueil/accueil');
    }
}
