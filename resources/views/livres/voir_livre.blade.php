@extends('master')
@section('content')
<strong>TITRE : </strong><em> {{$livre_a_voir->titre}}</em><br>
<strong>DESCRIPTION :</strong> <em>{{$livre_a_voir->description}}</em><br>
<strong>AUTEUR :</strong><em> {{$livre_a_voir->auteur}}</em><br>
<strong>NOMBRE DES PAGES :</strong> <em>{{$livre_a_voir->nbr}}</em> <br>

@endsection
