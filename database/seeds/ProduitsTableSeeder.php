<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 25;
        $produit->description = "tshirt sport j";
        $produit->photo_principale = "2.jpg";
        $produit->category_id = 2;
        $produit->save(); 


        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 35;
        $produit->description = "tshirt sport jj";
        $produit->photo_principale = "3.jpg";
        $produit->category_id = 2;
        $produit->save(); 

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 22;
        $produit->description = "tshirt sport jjj";
        $produit->photo_principale = "4.jpg";
        $produit->category_id = 4;
        $produit->save(); 

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 28;
        $produit->description = "tshirt sport jjjj";
        $produit->photo_principale = "10.jpg";
        $produit->category_id = 4;
        $produit->save(); 

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 45;
        $produit->description = "tshirt sport jjjjj";
        $produit->photo_principale = "6.jpg";
        $produit->category_id = 2;
        $produit->save(); 

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 30;
        $produit->description = "tshirt sport jjjjjj";
        $produit->photo_principale = "8.jpg";
        $produit->category_id = 3;
        $produit->save(); 

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 35;
        $produit->description = "tshirt sport jjjjjj44";
        $produit->photo_principale = "9.jpg";
        $produit->category_id = 2;
        $produit->save(); 


        $produit= new \App\Produit();
        $produit->nom = "T-Shirt";
        $produit->prix_ht = 55;
        $produit->description = "tshirt sport jjjjj55";
        $produit->photo_principale = "10.jpg";
        $produit->category_id = 3;
        $produit->save();



    }
}
