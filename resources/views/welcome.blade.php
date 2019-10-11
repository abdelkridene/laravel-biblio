@extends('master')
@section('content')
<table class="table table-dark">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">titre</th>
			<th scope="col">description</th>
			<th scope="col">nombre de page</th>
			<th scope="col">auteur</th>
			<th scope="col">categorie</th>
			<th scope="col">Action</th>

		</tr>
	</thead>
	<tbody>
		@foreach($livres as $livre)
		<tr>
			<th scope="row">{{$livre->id}}</th>
			<td>{{$livre->titre}}</td>
			<td>{{$livre->description}}</td>
			<td>{{$livre->nbr}}</td>
			<td>{{$livre->auteur}}</td>
			<td>{{$livre->category->name}}</td>
			<td>
				@auth
			<a href="{{route('VoirLivre',$livre->id)}}" class="btn btn-primary">Voir</a>

			<a href="{{route('editerLivre',$livre->id)}}" class="btn btn-warning">Editer</a>
			<a href="{{route('supprimerLivre',$livre->id)}}" class="btn btn-danger">Supprimer</a>
			  @else
			  <a href="{{route('VoirLivre',$livre->id)}}" class="btn btn-primary">Voir</a>
			 @endauth
		    </td>


		</tr>
		@endforeach

	</tbody>
</table>
@endsection