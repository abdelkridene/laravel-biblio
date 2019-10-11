@extends('master')
@section('content')

<form action="{{route('postAjouter_livre')}}" method="POST">

  @csrf
  <div class="form-group">
    <label for="titre">Titre de livre</label>
    <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre')}}"  placeholder="TITRE">
  </div>
 
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description"  value="{{old('description')}}" placeholder="DESCRIPTION">
  </div>
   <div class="form-group">
    <label for="nbr">Nombre Des Pages</label>
    <input type="text" class="form-control" id="nbr" name="nbr"  value="{{old('nbr')}}"   placeholder="NBR PAGES">
  </div>
   <div class="form-group">
    <label for="auteur">Nom De l'Auteur</label>
    <input type="text" class="form-control" id="auteur" name="auteur"  value="{{old('auteur')}}" placeholder="AUTEUR">
  </div>
  <div class="form-group">
    <label for="category_id">Choisissez une categorie:</label>

<select name="category_id" id="category_id">
  @foreach($categories as $categ )
    <option value="{{$categ->id}}">{{$categ->name}}</option>
  @endforeach
</select>

  </div>
  <input type="SUBMIT"  name="submit" value="Enregistrer">

</form>
@endsection