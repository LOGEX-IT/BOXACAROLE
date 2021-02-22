<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Commande;
use Gloudemans\Shoppingcart\Facades\Cart; 
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prixtotal = Cart::subtotal();
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        
        $data=array();
        $data['EtatCommande']='passé';
        $data['PrixTotal']=$prixtotal;
        $data['nom']=$request->nom;
        $data['telephone']=$request->telephone;
        $data['adresse']=$request->adresse;
        $data['created_at']=$created_at;
        $data['updated_at']=$updated_at;
        DB::table('commandes')->insert($data);

       $idcommande = Commande::all()->last()->idcommande;
        
        foreach(Cart::content() as $produit) {
    
        $data=array();
        $data['qteprod']=$produit->qty;
        $data['idproduit']=$produit->id;
        $data['idcommande']=$idcommande;
        $data['created_at']=$created_at;
        $data['updated_at']=$updated_at;
        DB::table('ligne_commandes')->insert($data);
       
       
       
        }
        Cart::destroy();
        return redirect('/')->with('success',"Votre commande a été enrégistré!!!");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
