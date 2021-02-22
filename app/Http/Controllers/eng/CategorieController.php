<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        return view('admin.liste_categorie');
    }


    public function ajouter_categorie()
    {
        return view('admin.ajout_categorie');
    }

    public function save_category(Request $request){
              Categorie::create($request->all());
             return redirect::to('/liste-categories');
        }
  


}
