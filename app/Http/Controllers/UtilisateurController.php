<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    public function consultUtilisateurs()
    {
        $utilisateurs = DB::table('utilisateurs')
            ->join('sexes', 'utilisateurs.sexe_id', '=', 'sexes.sexe_id')
            ->join('fonctions', 'utilisateurs.fonction_id', '=', 'fonctions.fonction_id')
            ->join('etat_comptes', 'utilisateurs.etat_compte_id', '=', 'etat_comptes.etat_compte_id')
            ->select(
                'utilisateurs.nom',
                'utilisateurs.prenom',
                'utilisateurs.pseudo',
                'sexes.sexe_libelle AS sexe',
                'fonctions.fonction_libelle AS fonction',
                'etat_comptes.etat_compte_libelle as etat_compte',
                'utilisateurs.id'
            )
            ->get();
        return view('Utilisateurs/consultUtilisateurs', [
            'utilisateurs' => $utilisateurs
        ]);
    }

    public function modifSuppUtilisateur($id)
    {


        $utilisateur = DB::table('utilisateurs')
            ->join('sexes', 'utilisateurs.sexe_id', '=', 'sexes.sexe_id')
            ->join('fonctions', 'utilisateurs.fonction_id', '=', 'fonctions.fonction_id')
            ->join('etat_comptes', 'utilisateurs.etat_compte_id', '=', 'etat_comptes.etat_compte_id')
            ->select(
                'utilisateurs.nom',
                'utilisateurs.prenom',
                'utilisateurs.pseudo',
                'sexes.sexe_libelle AS sexe',
                'fonctions.fonction_libelle AS fonction',
                'etat_comptes.etat_compte_libelle as etat_compte',
                'utilisateurs.id'
            )
            ->where('id', '=', $id)
            ->get();

        // $utilisateur = $utilisateurs[$id] ?? 'L\'utilisateur n\'éxiste pas';

        return view('Utilisateurs/modifSuppUtilisateur', [
            'utilisateur' => $utilisateur
        ]);
    }

    public function ajoutUtilisateur()
    {
        return view('Utilisateurs/ajoutUtilisateur');
    }

    public function ajoutUtilisateurTrait(Request $request)
    {
        $utilisateur = new Utilisateurs();
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->pseudo = $request->pseudo;
        $utilisateur->mail = $request->mail;
        $utilisateur->num_tel = $request->num_tel;
        $utilisateur->etat_compte_id = $request->etat_compte_id;
        $utilisateur->sexe_id = $request->sexe;
        $utilisateur->save();
        dd('post créé !');
    }
}
