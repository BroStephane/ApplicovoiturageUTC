@extends('Layouts.app')

@section('contenu')
    <h5>Liste utilisateurs</h5>
    @foreach($utilisateurs as $utilisateur)
    <div>
    <h6><a href="#">{{$utilisateur}}</a></h6>
    </div>
    @endforeach
@endsection

