<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function (){
// 	return view('index');
// });

Route::get('/',"MainController@index")->name('homepage');

Route::get('/produit/{id}','MainController@produit')->name('voir_produit');

Route::get('/categorie/{id}','MainController@viewByCategory')->name('voir_produit_par_cat');

// Route::get('/tag/{id}','MainController@viewBytag')->name('voir_produit_par_tag');

Route::post('/panier/add/{id}', 'CartController@add')->name('cart_add');

Route::get('/panier', 'CartController@index')->name('cart_index');