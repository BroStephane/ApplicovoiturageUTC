<?php

namespace App\Http\Controllers;

use App\Models\Trajets;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Villes;
use Illuminate\Http\Request;

class AnnonceCovoitController extends Controller
{
    #fonction qui permet de recuperer tous les annonces de covoiturage
    public function index(Request $request)
    {
        $villeDepart = $request->VilleDepart;
        $villeArrivee = $request->VilleArrivee;
        
            $trajets = DB::table('Trajets')
            ->join('villes AS V1', 'Trajets.ville_id_depart', '=','V1.ville_id') //jointure avec la table villes pour obtenir la ville départ
            ->join('villes AS V2', 'Trajets.ville_id_arrivee', '=','V2.ville_id')//jointure avec la table villes pour obtenir la ville d'arrivée
            ->select('date_de_publication','nb_passager','date_heure_depart', 'adresse_depart', //récupération des données souhaiter
            'adresse_arrivee','V1.ville_nom_reel AS VilleDepart','V2.ville_nom_reel AS VilleArrivee')
            ->when($villeDepart,function($query,$villeDepart){
                return $query->where('V1.ville_nom_reel','like', $villeDepart);
            })
            ->when($villeDepart,function($query,$villeDepart){
                return $query->where('V1.ville_nom_reel','like', $villeDepart);
            })
            /*
            ->where('VilleDepart','like', '%{$villeDepart}%')
            ->orWhere('VilleArrivee','like', '%{$villeArrivee}%')
            */
            ->get();

            return view('Annonces/ConsultationAnnonceCovoit',[
                "trajets" => $trajets //envoie de la requete dans la vue
            ]);
         
    }

    public function rechercher()
    {
        return view('Accueil/RechercherAnnonces');
    }

    #fonction qui permet de recuperer les villes pour les utiliser dans un liste déroulante

    public function RecupVilles()
    {
        $villes = DB::table('Villes')
        ->select('ville_nom_reel','ville_departement')
        ->where('ville_departement','=' ,60)
        ->orWhere('ville_departement','=' ,80)
        ->orWhere('ville_departement','=' ,02)
        ->orWhere('ville_departement','=' ,59)
        ->orderBy('ville_nom_reel','ASC')
        ->orderBy('ville_nom_reel','ASC')
        ->get();

        return view('Accueil/RechercherAnnonces',[
            "villes" => $villes //envoie de la requete dans la vue
        ]);

    }
       

    
}

