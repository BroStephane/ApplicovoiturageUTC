<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sexe;
use App\Models\Etat_comptes;
use App\Models\Fonctions;

use function Symfony\Component\String\b;

class UtilisateurController extends Controller
{
    #La fonction permet d'afficher tout les utilisateur inscrit sur l'application
    public function consultUtilisateurs()
    {
        #On se connecte à la base de donnée et on viens faire la requete SQL
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
            ->orderByRaw('nom')
            ->get();
        #renvoie la vue consultUtilisateur en lui passant les utilisateurs
        return view('Utilisateurs/consultUtilisateurs', [
            'utilisateurs' => $utilisateurs
        ]);
    }

    public function ajoutUtilisateur()
    {
        #On récupère le contenu des tables sexes, etat_comptes et fonctions pour le trasferer 
        #dans la vu pour les listes déroulante
        $sexes = DB::table('sexes')
            ->select('sexe_id', 'sexe_libelle')
            ->get();
        $etat_comptes = DB::table('etat_comptes')
            ->select('etat_compte_id', 'etat_compte_libelle')
            ->get();
        $fonctions = DB::table('fonctions')
            ->select('fonction_id', 'fonction_libelle')
            ->get();

        return view('Utilisateurs/ajoutUtilisateur', [
            'sexes' => $sexes, 'etat_comptes' => $etat_comptes, 'fonctions' => $fonctions
        ]);
    }

    public function ajoutUtilisateurTrait(Request $request)
    {
        $utilisateur = new Utilisateurs();
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->pseudo = $request->pseudo;
        $utilisateur->mail = $request->mail;
        $utilisateur->num_tel = $request->num_tel;
        $utilisateur->mot_de_passe = bcrypt('$request->mot_de_passe');
        $utilisateur->sexe_id = $request->sexes;
        $utilisateur->fonction_id = $request->fonction;
        $utilisateur->etat_compte_id = $request->etat_compte;
        $utilisateur->save();

        return view('Utilisateurs/consultUtilisateurs', [
            'utilisateurs' => $utilisateur
        ]);
    }


    #La fonction permet de récuperer un utilisateur en particulier grace à son id.
    public function modifSuppUtilisateur($id)
    {

        #  / \    La fonction n'est pas encore complète, pour le moment
        # / | \   il n'y a juste la récupération de l'utilisateur grâce à son id.
        #/__°__\  Il faut faire sa modification et sa suppression.

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

        #On récupère le contenu des tables sexes, etat_comptes et fonctions pour le trasferer 
        #dans la vu pour les listes déroulante
        $sexes = DB::table('sexes')
            ->select('sexe_id', 'sexe_libelle')
            ->get();
        $etat_comptes = DB::table('etat_comptes')
            ->select('etat_compte_id', 'etat_compte_libelle')
            ->get();
        $fonctions = DB::table('fonctions')
            ->select('fonction_id', 'fonction_libelle')
            ->get();


        //$utilisateur = $utilisateurs[$id] ?? 'L\'utilisateur n\'éxiste pas';
        #renvoi la vue modifSuppUtilisateur
        return view('Utilisateurs/modifSuppUtilisateur', [
            'utilisateur' => $utilisateur,  'sexes' => $sexes, 'etat_comptes' => $etat_comptes, 'fonctions' => $fonctions
        ]);
    }

    public function modifSuppUtilisateurTrait(Request $request, $id)
    {
        $utilisateur = new Utilisateurs();
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->pseudo = $request->pseudo;
        $utilisateur->mail = $request->mail;
        $utilisateur->num_tel = $request->num_tel;
        $utilisateur->mot_de_passe = bcrypt('$request->mot_de_passe');
        $utilisateur->sexe_id = $request->sexes;
        $utilisateur->fonction_id = $request->fonction;
        $utilisateur->etat_compte_id = $request->etat_compte;
        $utilisateur->save();

        return view('Utilisateurs/modifSuppUtilisateur', [
            'utilisateurs' => $utilisateur
        ]);
    }
}
