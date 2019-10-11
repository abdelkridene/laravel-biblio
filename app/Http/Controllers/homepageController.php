<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class homepageController extends Controller
{
	public function home()
	{



		$livres =  Livre::get();
		return view('welcome',['livres'=>$livres]);
	}
   
}
