@extends('master')
@section('content')
<form action="{{route('postEditCategories',$categorie->id)}}" method="post" >
	@csrf
	<fieldset>
		<label for="name"> <strong>Nom De La Categorie : </strong></label>
		<input type="text" name="name" value="{{$categorie->name}}">
		<input type="SUBMIT"  name="submit" value="Enregistrer">
	</fieldset>


</form>



@endsection