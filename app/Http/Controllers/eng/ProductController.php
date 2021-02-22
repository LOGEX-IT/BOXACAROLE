<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Str;
/* use Gloudemans\Shoppingcart\Facades\Cart;
 */
class ProductController extends Controller
{

  public function englais(){
  /*     dd(Cart::content());
   */    
     $all_published_product=DB::table('products')
      ->join('categories', 'products.categorie_id','=', 'categories.id')
      ->select('products.*','categories.name')
      ->where('products.status',1)
      ->get();
      $manage_published_product=view('produits.home_content')
             ->with('all_published_product',$all_published_product);
  
      return view('produits.home_content')->with(compact('all_published_product'));
      // return view('pages.home_content');
             // ->with('pages.home_content',$manage_published_product);
  }

  public function francais(){
    /*     dd(Cart::content());
     */    
       $all_published_product=DB::table('products')
        ->join('categories', 'products.categorie_id','=', 'categories.id')
        ->select('products.*','categories.name')
        ->where('products.status',1)
        ->get();
        $manage_published_product=view('produits.home_content')
               ->with('all_published_product',$all_published_product);
    
        return view('produits.home_content')->with(compact('all_published_product'));
        // return view('pages.home_content');
               // ->with('pages.home_content',$manage_published_product);
    }

  public function index(){
/*     dd(Cart::content());
 */    $all_published_product=DB::table('products')
    ->join('categories', 'products.categorie_id','=', 'categories.id')
    ->select('products.*','categories.name')
    ->where('products.status',1)
    // ->limit(9)
    ->get();
    $manage_published_product=view('produits.home_content')
           ->with('all_published_product',$all_published_product);

    return view('produits.home_content')->with(compact('all_published_product'));
    // return view('pages.home_content');
           // ->with('pages.home_content',$manage_published_product);
}

public function show_product_by_category($id){
  $product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.status','1')
  ->limit(100)
  ->get();

  $mens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.style',"hommes")
  ->limit(100)
  ->get();

  $womens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.style','dames')
  ->limit(100)
  ->get();

  $children_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.style','enfants')
  ->limit(100)
  ->get();

  $categorie = DB::table('categories')
               ->where('id',$id)->first();

  $product_footer_by_category = DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.status','6')
  ->limit(4)
  ->get();

  $manage_product_by_category=view('produits.produits_par_categorie')
         ->with('product_by_category',$product_by_category);

return view('produits.produits_par_categorie')->with(compact('product_by_category','categorie','product_footer_by_category','mens_product_by_category','womens_product_by_category','children_product_by_category'));
  // return view('layout')
  //        ->with('pages.produits_par_categorie',$manage_product_by_category,$categorie);
}


public function style_product_by_category($id){
  $product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->limit(100)
  ->get();

  $mens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.style',"hommes")
  ->limit(100)
  ->get();

  $womens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->where('products.style','dames')
  ->limit(100)
  ->get();

  $categorie = DB::table('categories')
               ->where('id',$id)->first();

  $product_footer_by_category = DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$id)
  ->limit(4)
  ->get();

  $manage_product_by_category=view('produits.produits_hommes_par_categorie')
         ->with('product_by_category',$product_by_category);

return view('produits.produits_hommes_par_categorie')->with(compact('product_by_category','categorie','product_footer_by_category','mens_product_by_category','womens_product_by_category'));
  // return view('layout')
  //        ->with('pages.produits_par_categorie',$manage_product_by_category,$categorie);
}



  public function liste_produits(){
    return view('admin.liste_produit');
  }

  public function ajout_produits(){
    return view('admin.ajout_produit');
  }

  public function save_product(Request $request){
    $data=array();
    $data['title']=$request->title;
    $data['categorie_id']=$request->categorie_id;
    $data['style']=$request->style;
    $data['marque']=$request->marque;
    $data['matiere_fabrication']=$request->matiere_fabrication;
    $data['origine']=$request->origine;
    $data['garantie_eventuelle']=$request->garantie_eventuelle ;
    $data['price']=$request->price;
    $data['price']=$request->price;
    $data['status']=$request->status;
    $data['created_at']=now();
    $image=$request->file('image');
    if($image){


        $image_name=str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='images/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $data['image']=$image_url;
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // exit();
            
            DB::table('products')->insert($data);
            // Session::put('message','Produit ajoute avec succes !!!');
            //return Redirect::to('/liste-produits');
        }
    }
    //$data['produits_image']='';
    //DB::table('tbl_produits')->insert($data);
    // Session::put('message','Produit ajoutee avec succes sans image !!!');
    return view('admin.liste_produit');
}

public function product_detail($id){
  $product_by_details=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('products.id',$id)
  ->first();

  $catid=DB::table('products')
        ->select('products.categorie_id')
        ->where('products.id',$id)
        ->first();

  $product_footer_by_category2 = DB::table('products') 
  ->where('products.status','6')
  ->limit(4)
  ->get();



  $manage_product_by_details=view('produits.produit_details')
         ->with('product_by_details',$product_by_details);
          return view('produits.produit_details')->with(compact('product_by_details','product_footer_by_category2','catid'));
}

public function contact(){
  return view('produits.contact');
}

  
}
