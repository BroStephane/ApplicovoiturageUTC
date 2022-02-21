@extends('Layouts.app')

@section('contenu')
    <h6>Salut ! Bienvenue sur notre site UTCovoit</h6>

    <form action="{{ route('annonces.rechercher') }}" class="d-flex" method="POST">
        @csrf
        <input class="form-control me-2" type="search" name="VilleDepart" placeholder="Search" aria-label="Search">
        <input class="form-control me-2" type="search" name="VilleArrivee" placeholder="Search" aria-label="Search">
        
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
@endsection