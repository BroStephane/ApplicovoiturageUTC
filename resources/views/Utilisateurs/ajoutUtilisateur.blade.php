@extends('Layouts.app')

@section('contenu')
<h6>Creer un nouvel utilisateur</h6>

<form method ="POST" action="{{ route('ajoutUtilisateurTrait') }}">
    @csrf
    Nom: <input type = "text" name="nom" >
    Prenom :<input type = "text" name="prenom">
    Pseudo: <input type = "text" name="pseudo">
    Mail: <input type = "text" name="mail">
    Numéro de téléphone: <input type = "text" name="num_tel">
    Mot de passe: <input type = "text" name="mot_de_passe">
  
<select name="sexes" id="sexes">
  <option value="" selected>selectionnez un sexe</option>
  @foreach ($sexes as $sexe)
      <option value="{{ $sexe->sexe_libelle }}" >{{ $sexe->sexe_libelle }}</option>
      
  @endforeach
  
</select>
<select name="etat_compte" id="etat_compte">
  <option value="" selected>selectionnez un etat</option>
  @foreach ($etat_comptes as $etat_comptes)
      <option value="{{ $etat_comptes->etat_compte_libelle }}" >{{ $etat_comptes->etat_compte_libelle }}</option>
      
  @endforeach
  
</select>
  


    <button type="submit">Créer</button>
</form>
@endsection