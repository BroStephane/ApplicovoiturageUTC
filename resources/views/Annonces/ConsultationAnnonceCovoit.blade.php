@extends('Layouts.app')

@section('contenu')
    @if ($trajets->count()>0)<!-- on vérifie qu'il existe bien des trajets-->
        @foreach ($trajets as $trajet) <!--on boucle sur $trajet pour récuperer tous les trajets-->
        <div id="Annonces" >
            <h6>Adresse de départ : {{ $trajet->adresse_depart}} à {{ $trajet->VilleDepart}} <br> 
                Adresse arrivée : {{ $trajet->adresse_arrivee}} à {{ $trajet->VilleArrivee}} <br>
                Date et heure de départ : {{ $trajet->date_heure_depart}} <br>
                Nombre de place : {{ $trajet->nb_passager}}  <br>
                Publier le : {{ $trajet->date_de_publication}} </h6> <!--Affichage de tous les trajets-->
                <br>
        </div>
        @endforeach
    @else
        <span>Aucun covoiturage disponnible</span>
    @endif
    
    @endsection