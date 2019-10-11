@extends('master')
@section('content')

<h1><strong>liste des livres par categories :</strong></h1>

<ul>
	
@foreach( $categories as $categ)
	<li>{{$categ->titre</li>
@endforeach
</ul>


@endsection