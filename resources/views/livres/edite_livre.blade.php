@extends('master')
@section('content')

<form action="{{route('postEdit_livre',$livre_a_editer->id)}}" method="POST">

  @csrf
  <div class="form-group">
    <label for="titre">Titre de livre</label>
    <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre',$livre_a_editer->titre)}}"  placeholder="TITRE">
  </div>
 
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description"  value="{{old('description',$livre_a_editer->description)}}" placeholder="DESCRIPTION">
  </div>
   <div class="form-group">
    <label for="nbr">Nombre Des Pages</label>
    <input type="text" class="form-control" id="nbr" name="nbr"  value="{{old('nbr',$livre_a_editer->nbr)}}"   placeholder="NBR PAGES">
  </div>
   <div class="form-group">
    <label for="auteur">Nom De l'Auteur</label>
    <input type="text" class="form-control" id="auteur" name="auteur"  value="{{old('auteur',$livre_a_editer->auteur)}}" placeholder="AUTEUR">
  </div>

<select name="category_id" id="category_id">
  @foreach($categories as $categ )
    <option value="{{$categ->id}}">{{$categ->name}}</option>
  @endforeach
</select><br><br>
  <input type="SUBMIT"  name="submit" value="Enregistrer">

</form>
@endsection