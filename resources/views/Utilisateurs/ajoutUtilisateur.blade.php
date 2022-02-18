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
  @foreach ($sexes as $sexe)
      <option value="{{ $sexe->sexe_id}}" >{{ $sexe->sexe_libelle }}</option>
  @endforeach
</select>
<select name="fonction" id="fonction">
  @foreach ($fonctions as $fonctions)
      <option value="{{ $fonctions->fonction_id }}" >{{ $fonctions->fonction_libelle }}</option> 
  @endforeach
</select>
<select name="etat_compte" id="etat_compte">
  @foreach ($etat_comptes as $etat_comptes)
      <option value="{{ $etat_comptes->etat_compte_id }}" >{{ $etat_comptes->etat_compte_libelle }}</option> 
  @endforeach
</select>
  


    <button type="submit">Créer</button>
</form>
@endsection