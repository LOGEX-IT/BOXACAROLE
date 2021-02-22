<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Http\Requests;
use Illuminate\Support\Str;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();
/* use Gloudemans\Shoppingcart\Facades\Cart;
 */
class ProductController extends Controller
{


  public function login(){
        return view('fr.login');
    }
  
  public function compte_client(){
      return view('fr.register');
  }

  public function unactive_product($id){
        DB::table('products')
        ->where('id',$id)
        ->update(['status' =>6]);

        $all_product_info=DB::table('products')
        ->join('categories', 'products.categorie_id','=', 'categories.id')
        ->select('products.*','categories.name') ->get();
        Session::put('message','Produit desactivé avec succès !!!');
        return view('admin.liste_produit', compact('all_product_info'));
        // return Redirect::to('/liste-produits');
    }

  public function active_product($id){
        DB::table('products')
        ->where('id',$id)
        ->update(['status' =>6]);
        Session::put('message','Produit activé avec succès !!!');
        $all_product_info=DB::table('products')
        ->join('categories', 'products.categorie_id','=', 'categories.id')
        ->select('products.*','categories.name') ->get();
        Session::put('message','Produit desactivé avec succès !!!');
        return view('admin.liste_produit', compact('all_product_info'));
        // return Redirect::to('/liste-produits');
    }



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
  
      return view('eng.home_content')->with(compact('all_published_product'));
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
    
        return view('fr.home_content')->with(compact('all_published_product'));
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

    return view('fr.home_content')->with(compact('all_published_product'));
    // return view('pages.home_content');
           // ->with('pages.home_content',$manage_published_product);
}

public function show_product_by_category($id){
  $idCategorie = Crypt::decrypt($id);
  $product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.status','1')
  ->limit(100)
  ->get();

  $mens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.style',"hommes")
  ->limit(100)
  ->get();

  $womens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.style','dames')
  ->limit(100)
  ->get();

  $children_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.style','enfants')
  ->limit(100)
  ->get();

  $categorie = DB::table('categories')
               ->where('id',$idCategorie)->first();

  $product_footer_by_category = DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.status','6')
  ->limit(4)
  ->get();

  $manage_product_by_category=view('produits.produits_par_categorie')
         ->with('product_by_category',$product_by_category);

return view('produits.produits_par_categorie')->with(compact('product_by_category','categorie','product_footer_by_category','mens_product_by_category','womens_product_by_category','children_product_by_category'));
  // return view('layout')
  //        ->with('pages.produits_par_categorie',$manage_product_by_category,$categorie);
}


//Produit par categorie version anglaise
public function show_product_by_category_eng($id){
  $idCategorie = Crypt::decrypt($id);
  $product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.status','1')
  ->limit(100)
  ->get();

  $mens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.style',"hommes")
  ->limit(100)
  ->get();

  $womens_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.style','dames')
  ->limit(100)
  ->get();

  $children_product_by_category=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.style','enfants')
  ->limit(100)
  ->get();

  $categorie = DB::table('categories')
               ->where('id',$idCategorie)->first();

  $product_footer_by_category = DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('categories.id',$idCategorie)
  ->where('products.status','6')
  ->limit(4)
  ->get();

  $manage_product_by_category=view('produits.produits_par_categorie')
         ->with('product_by_category',$product_by_category);

return view('eng.produits_par_categorie')->with(compact('product_by_category','categorie','product_footer_by_category','mens_product_by_category','womens_product_by_category','children_product_by_category'));
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
        $all_product_info=DB::table('products')
        ->join('categories', 'products.categorie_id','=', 'categories.id')
        ->select('products.*','categories.name') ->get();
    return view('admin.liste_produit', compact('all_product_info'));
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
            DB::table('products')->insert($data);
        }
    }
    //$data['produits_image']='';
    //DB::table('tbl_produits')->insert($data);
    // Session::put('message','Produit ajoutee avec succes sans image !!!');
    return view('admin.liste_produit');
}

public function product_detail($id){
  $idCategorie = Crypt::decrypt($id);
  $product_by_details=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('products.id',$idCategorie)
  ->first();

  $catid=DB::table('products')
        ->select('products.categorie_id')
        ->where('products.id',$idCategorie)
        ->first();

  $product_footer_by_category2 = DB::table('products') 
  ->where('products.status','6')
  ->limit(4)
  ->get();



  $manage_product_by_details=view('produits.produit_details')
         ->with('product_by_details',$product_by_details);
          return view('fr.produit_details')->with(compact('product_by_details','product_footer_by_category2','catid'));
}

public function product_detail_eng($id){
  $idCategorie = Crypt::decrypt($id);
  $product_by_details=DB::table('products')
  ->join('categories', 'products.categorie_id','=', 'categories.id')
  ->select('products.*','categories.name')
  ->where('products.id',$idCategorie)
  ->first();

  $catid=DB::table('products')
        ->select('products.categorie_id')
        ->where('products.id',$idCategorie)
        ->first();

  $product_footer_by_category2 = DB::table('products') 
  ->where('products.status','6')
  ->limit(4)
  ->get();



  $manage_product_by_details=view('eng.produit_details')
         ->with('product_by_details',$product_by_details);
          return view('eng.produit_details')->with(compact('product_by_details','product_footer_by_category2','catid'));
}

public function contact(){
  return view('produits.contact');
}

public function contact_en(){
  return view('eng.contact');
}

  public function connexion(Request $request){
        $admin_username = $request->name;
        $admin_password = $request->password;
        // $admin_username = $request->username;
        // $admin_password = $request->password;

            $result=DB::table('users')
                    ->where('name',$admin_username)
                    ->where('password',$admin_password)
                    ->where('statut','1')
                    ->first();
            $historic_command_user=DB::table('users')
                    ->where('name',$admin_username)
                    ->where('password',$admin_password)
                    ->where('statut','0')
                    ->first();
            if($result){
            return view('admin_layout', compact('result'));

        }elseif($historic_command_user){
            return back();
        }

        else{
          return back()->with('error','Erreur de Mot de passe ou username!');
      }
    }

        public function delete_product($id){
          DB::table('products')
          ->where('id',$id)
          ->delete();
        $all_product_info=DB::table('products')
        ->join('categories', 'products.categorie_id','=', 'categories.id')
        ->select('products.*','categories.name') ->get();
        Session::put('message','Produit desactivé avec succès !!!');
        return view('admin.liste_produit', compact('all_product_info'));
    }


    public function edit($id){   
        $data = DB::table('products')
        ->join('categories', 'products.categorie_id','=', 'categories.id')
        ->where('products.id',$id)
        ->select('products.*','categories.name')
        ->first();
      return view('admin.edit_produit',compact('data'));
     }



public function update(Request $request, $id){
  $update = [
  'title' => $request->title, 
  'categorie_id' => $request->categorie_id,
  'style' => $request->style, 
  'marque' => $request->marque,
  'matiere_fabrication' => $request->matiere_fabrication, 
  'origine' => $request->origine,
  'garantie_eventuelle' => $request->garantie_eventuelle, 
  'price' => $request->price,
  'status' => $request->status2,
       ]; 
  $image=$request->file('image');   
       if($image){
        $image_name=str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='images/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success){
            $update['image']=$image_url;
            $update['title'] = $request->get('title');
            $update['categorie_id'] = $request->get('categorie_id');
            $update['style'] = $request->get('style');
            $update['marque'] = $request->get('marque');
            $update['matiere_fabrication'] = $request->get('matiere_fabrication');
            $update['origine'] = $request->get('origine');
            $update['garantie_eventuelle'] = $request->get('garantie_eventuelle');
            $update['price'] = $request->get('price');
            $update['status'] = $request->get('status2');
            Product::where('id',$id)->update($update);
             }
          }
          return view('admin.liste_produit', compact('all_product_info'));
      } 


      public function show_commande(){
  $showCommande=DB::table('ligne_commandes')
  ->join('commandes', 'ligne_commandes.idcommande','=', 'commandes.idcommande')
  ->join('products', 'ligne_commandes.idproduit','=', 'products.id')
  ->select('ligne_commandes.*','commandes.*','products.*')
  ->orderBy('commandes.idcommande', 'asc')
  ->get();
  return view('admin.liste_commandes', compact('showCommande'));
      }

      public function save_users(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['telephone']=$request->telephone;
        $data['adresse']=$request->adresse;
        $data['password']=Crypt::encrypt($request->password);
        $data['statut']=$request->statut;
        $data['created_at']=now();
        DB::table('users')->insert($data);
        
        //$data['produits_image']='';
        //DB::table('tbl_produits')->insert($data);
        // Session::put('message','Produit ajoutee avec succes sans image !!!');
        return redirect('/')->with('success','Bravo ! votre compte client a été créé avec succès ');  

    }
}
