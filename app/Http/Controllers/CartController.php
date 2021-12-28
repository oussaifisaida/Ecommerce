<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Produit;
use App\Http\Controllers\Controller;
class CartController extends Controller
{
    //ajouter un produit au panier 
    public function add(Request $request)
    { 

     $produit = Produit::find($request->id);
     Cart::add(array(
       
      'id' => $produit->id,
      'name' => $produit->nom,
      'price' => $produit->prix_ht,
      'quantity' => $request->qty,
      'attributes' => array('size'=>$request->size , 'photo'=>$produit->photo_principale)   
  	));

       return redirect(route('cart_index'));
    }

    public function index()
    {
    	$content = Cart::getContent();
    	// dd($content);
    	$total_ttc_panier = Cart::getTotal();

    	return view('cart.index',compact('content','total_ttc_panier'));
    }
}
