@extends('master')
@section('content')


<strong style="font-size: 30px">Liste des Categories :</strong>
<table>
	<tr>
<ul>
	@foreach($categorie as $categ)
	<td><strong style="font-size: 25px ;color: #708090"><li>{{$categ->name}} </li></strong>
 <a href="{{route('editeCateg',$categ->id)}}" class="btn btn-warning">Editer</a> <a href="{{route('supprimerCateg',$categ->id)}}" class="btn btn-danger">Supprimer</a> </td>
	</tr>



	@endforeach
</ul>
</table>
<hr><hr>
<strong>AJOUETR UNE CATEGORIE</strong>
<form action="{{route('postSetCategories')}}" method="post" >
	@csrf
	<fieldset>
		<label for="name"> <strong>Nom De La Categorie : </strong></label>
		<input type="text" name="name">
		<input type="SUBMIT"  name="submit" value="Enregistrer">
	</fieldset>


</form>














@endsection