<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <!--@include('template')-->
    @if ($trajets->count()>0)<!-- on vérifie qu'il existe bien des trajets-->
        @foreach ($trajets as $trajet) <!--on boucle sur $trajet pour récuperer tous les trajets-->
        <div id="Annonces" >
            <h3>Adresse de départ : {{ $trajet->adresse_depart}} à {{ $trajet->VilleDepart}} <br> 
                Date et heure de départ : {{ $trajet->date_heure_depart}} <br>
                 Adresse arrivée : {{ $trajet->adresse_arrivee}} à {{ $trajet->VilleArrivee}} <br>
                Nombre de place : {{ $trajet->nb_passager}} {{ $trajet->date_de_publication}} </h3> <!--Affichage de tous les trajets-->
                <br>
        </div>
        @endforeach
    @else
        <span>Aucun covoiturage disponnible</span>
    @endif
    
    <h3></h3>
    <script src="{{ asset('js/app.js') }}"></script> 

    
</body>
</html>