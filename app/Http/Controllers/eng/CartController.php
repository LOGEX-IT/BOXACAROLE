<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Illuminate\support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produits.panier');
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
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
        return $cartItem->id == $request->id;
         });

          if($duplicata->isNotEmpty()){
            return redirect('/')->with('success','Le produit a deja été ajouté');  
          }

          $product = Product::find($request->id);

         Cart::add($product->id, $product->title, $product->qty, $product->price)
             ->associate('App\Product');
             return redirect('/')->with('success','Le produit a bien été ajouté');
    }

    public function increase_qty_product(Request $request){
        $request->qty++;
        Cart::update($request->rowId, $request->qty);
        return redirect()->back()->with('success', 'Mise à jour effectuée avec succès');    
    }

    public function decrease_qty_product(Request $request){
        $request->qty--;
        Cart::update($request->rowId, $request->qty);
        return redirect()->back()->with('success', 'Mise à jour effectuée avec succès');    
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
    public function destroy($rowid)
    {
        Cart::remove($rowid);
        return back()->with('success','Le produit a été bien supprimé');
    }
}
