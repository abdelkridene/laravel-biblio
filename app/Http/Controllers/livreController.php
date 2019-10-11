<?php

namespace App\Http\Controllers;
use App\Livre;
use App\categories;

use Illuminate\Http\Request;

class livreController extends Controller
{
    /*
    public function __construct()
    {

        $this->middleware('auth');
    }*/
    public function ajouterLivre()
    {
       // $category = categories::all();

    	return view('livres.ajouter_livre');
    }
    public function postAjouterLivre(Request $request)
    {
        $data=$request->validate([
            'titre'=>'required',
            'description'=>'required',
            'nbr'=>'required',
            'auteur'=>'required',
            'category_id'=>'required'

        ]);
/*        dd($request);
*/        livre::create($data);



/*
    		$livre= new Livre;
    		$livre->titre=$request->titre;
    		$livre->description=$request->description;
    		$livre->nbr=$request->nbr;
    		$livre->auteur=$request->auteur;
    		$livre->save();
*/
            return back()->with('success', 'livre bien ajouter');

       // return redirect()->route('ajouter_livre');

    }

    public function supprimerLivre($id)
    {
            $livre_a_supprimer =Livre::find($id);
             $livre_a_supprimer->delete();

    return back()->with('success', 'livre bien supprimé');

    }
    public function VoirLivre($id)
    {
         $livre_a_voir =Livre::find($id);
/*                 dd($livre_a_voir);
*/
        return view('livres.voir_livre',[
            'livre_a_voir'=> $livre_a_voir

        ]);
    }
    public function getEdit($id)
    {
          $livre_a_editer =Livre::find($id);
/*                 dd($livre_a_voir);
*/
        return view('livres.edite_livre',[
            'livre_a_editer'=> $livre_a_editer

        ]);

    }
    public function postEdit(Request $request,$id)
    {
        $data=$request->validate([
            'titre'=>'required',
            'description'=>'required',
            'nbr'=>'required',
            'auteur'=>'required'

        ]);
        $livre =Livre::find($id);
/*        dd($livre);
*/        $livre->update($data);
        return back()->with('success', 'livre edité !');
    }
    


    

 }
