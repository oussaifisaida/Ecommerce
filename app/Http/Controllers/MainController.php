<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Category;
use App\Http\Controllers\Controller;




class MainController extends Controller
{
    public function index() {

    	$produits = Produit::all();
        

        $categories = Category::where('is_online',1)->get();
    	return view('shop.index', compact('produits','categories'));
    }

    public function produit(Request $request) {
    	// dd($request->id);


        $categories = Category::where('is_online',1)->get();
    	$produit=Produit::find($request->id);

    	return view('shop.produit',compact('produit','categories'));

    	}

        public function viewByCategory(Request $request) {
    //      //recupere tt les categories  >> is_online=1

//            $categories = Category::where('is_online',1)->get();
             // dd($categories);
            $produits= Produit::where('category_id',$request->id)->get();

       return view('shop.categorie',compact('produits'));
     }
}
