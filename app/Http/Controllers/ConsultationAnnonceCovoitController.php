<?php

namespace App\Http\Controllers;

use App\Models\Trajets;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationAnnonceCovoitController extends Controller
{
    public function index(Request $request)
    {
        $villeDepart = $request->VilleDepart;
        $villeArrivee = $request->VilleArrivee;
        
            $trajets = DB::table('Trajets')
            ->join('villes AS V1', 'Trajets.ville_id_depart', '=','V1.ville_id') //jointure avec la table villes pour obtenir la ville départ
            ->join('villes AS V2', 'Trajets.ville_id_arrivee', '=','V2.ville_id')//jointure avec la table villes pour obtenir la ville d'arrivée
            ->select('date_de_publication','nb_passager','date_heure_depart', 'adresse_depart', //récupération des données souhaiter
            'adresse_arrivee','V1.ville_nom_reel AS VilleDepart','V2.ville_nom_reel AS VilleArrivee')
            
            ->get();

            return view('Annonces/ConsultationAnnonceCovoit',[
                "trajets" => $trajets //envoie dans la vue de la requete
            ]);
         
    }

    public function rechercher()
    {
        return view('Annonces/RechercherAnnonces');
    }

    
    
}
