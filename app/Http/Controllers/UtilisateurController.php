<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function consultUtilisateurs()
    {
        $utilisateurs = [
            'Mon utilisateur 1',
            'Mon utilisateur 2'
        ];

        return view('Utilisateurs/consultUtilisateurs',[
            'utilisateurs'=> $utilisateurs
        ]);

    }

    public function modifSuppUtilisateur($id)
    {
        $utilisateurs = [
            1 => 'Les infos du n°1',
            2=> 'Les infos du n°2'
        ];

        $utilisateur = $utilisateurs[$id] ?? 'L\'utilisateur n\'éxiste pas';

        return view ('Utilisateurs/modifSuppUtilisateur',[
            'utilisateur' => $utilisateur
        ]);
    }
}
