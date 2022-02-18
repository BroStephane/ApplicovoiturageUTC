@extends('Layouts.app')

@section('contenu')
<h5>Liste utilisateurs</h5>
@if ($utilisateur->count() > 0)
@foreach($utilisateur as $utilisateur)
    <div>
    <h6>Nom : {{$utilisateur->nom}} Prénom : {{ $utilisateur->prenom }} Pseudo : {{ $utilisateur->pseudo }} Sexe : {{ $utilisateur->sexe }}
    Fonction : {{ $utilisateur->fonction }} État du compte : {{ $utilisateur->etat_compte }}</h6>

    <button class="favorite styled"
        type="button">
    confirmer les modifications
</button>
    </div>

    <form action="/ma-page-de-traitement" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
    </form>

@endforeach
@else
<span>Auncun utilisateurs dans la base de données</span>
@endif
@endsection

