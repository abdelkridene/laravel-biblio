<?php

namespace App\Http\Controllers;
use App\categories;
use Illuminate\Http\Request;
use App\Livre;
class categoriesController extends Controller
{


   public function showCategories(){

   	$categorie=categories::all();
   	return view('categories' ,['categorie'=>$categorie]);

   }
   public function postSetCategories(Request $request)
   {

        $data=$request->validate([
            'name'=>'required'

        ]);
/*        dd($request);
*/        categories::create($data);

            return back()->with('success', 'categorie bien ajouter');

   }
   public function editeCateg($id){

   			$categorie=categories::find($id);
/*dd($categorie);
*/   	return view('editer',['categorie'=>$categorie]);


   }
   public function postEditCategories(Request $request ,$id)
   {


        $data=$request->validate([
            'name'=>'required'
        ]);
        $categorie =categories::find($id);
/*        dd($livre);
*/        $categorie->update($data);
        return back()->with('success', 'categorie editée !');
    

   }
   public function supprimerCateg ($id)
   {
   		$categorie=categories::find($id);
   		$categorie->delete();
   		 return back()->with('success', 'categorie supprimée !');

   }
   public function livresParCategorie($id){

    /*dd($id);*/
    $categories=categories::find($id);
    return view('livres.Categories',compact('categories'));


   }
}
