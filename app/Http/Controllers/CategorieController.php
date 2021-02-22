<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Categorie; 
use DB;

class CategorieController extends Controller
{
    public function index()
    {
      $all_category_info=DB::table('categories')->get();
      return view('admin.liste_categorie', compact('all_category_info'));
    }


    public function ajouter_categorie()
    {
        return view('admin.ajout_categorie');
    }

    public function save_category(Request $request){
              Categorie::create($request->all());
             return redirect::to('/liste-categories');
        }


    public function delete_category($id){
          DB::table('categories')
          ->where('id',$id)
          ->delete();
          return redirect::to('/liste-categories');
        // return view('admin.liste_produit');
    }


    public function edit($id){   
        $data = DB::table('categories')
        ->where('id',$id)
        ->first();
      return view('admin.edit_categorie',compact('data'));
     }

     public function update(Request $request, $id){
        $update = [
        'name' => $request->name, 
        'description' => $request->description,
        'status' => $request->status, 
       ]; 
            $update['name'] = $request->get('name');
            $update['description'] = $request->get('description');
            $update['status'] = $request->get('status');
            Categorie::where('id',$id)->update($update);
            $all_category_info=DB::table('categories')->get();
            return view('admin.liste_categorie', compact('all_category_info'));
      }


      public function unactive_category($id){
        DB::table('categories')
        ->where('id',$id)
        ->update(['status' =>0]);
        $all_category_info=DB::table('categories')->get();
        return view('admin.liste_categorie', compact('all_category_info'));
    }

      public function active_category($id){
        DB::table('categories')
        ->where('id',$id)
        ->update(['status' =>1]);
        $all_category_info=DB::table('categories')->get();
        return view('admin.liste_categorie', compact('all_category_info'));
    }
 

}
