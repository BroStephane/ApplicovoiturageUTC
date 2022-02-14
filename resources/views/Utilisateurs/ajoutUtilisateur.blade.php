@extends('Layouts.app')

@section('contenu')
<h6>Creer un nouvel utilisateur</h6>

<form method =="AJOUTUTIL" action="{{ route('ajoutUtilisateurTrait') }}">
    @csrf
    Nom: <input type = "text" name="nom" >
    Prenom :<input type = "text" name="prenom">
    Pseudo: <input type = "text" name="pseudo">
    Mail: <input type = "text" name="mail">
    Numéro de téléphone: <input type = "text" name="num_tel">
  
    Sexe:
<select id="sexe">
    <option value="1">Homme</option>
    <option value="2">Femme</option>
    <option value="3" selected>Ne pas préciser</option>
  </select>

    <button type="submit">Créer</button>
</form>
@endsection