@extends('Layouts.app')

@section('contenu')
    <h5>Liste utilisateurs</h5>
    @if ($utilisateurs->count() > 0)
    @foreach($utilisateurs as $utilisateur)
        <div>
        <h6>Nom : {{$utilisateur->nom}} Prénom : {{ $utilisateur->prenom }} Pseudo : {{ $utilisateur->pseudo }} Sexe : {{ $utilisateur->sexe }}
        Fonction : {{ $utilisateur->fonction }} État du compte : {{ $utilisateur->etat_compte }}</h6>
        <h6><a href="{{ route('modifSuppUtilisateur/',['id' => $utilisateur->id]) }}">Modifier l'utilisateur</a></h6>
        </div>
    @endforeach
    @else
    <span>Auncun utilisateurs dans la base de données</span>
    @endif

@endsection

