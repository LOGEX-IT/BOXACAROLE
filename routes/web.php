  <?php

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
Route::get('/','ProductController@index');
Route::post('/save-users', 'ProductController@save_users');

Route::post('/update/{id}', 'ProductController@update');

Route::get('/commandes','ProductController@show_commande');

Route::get('/en/panier','CartController@index_eng');
Route::get('/fr/panier','CartController@index');

Route::post('/connexion','ProductController@connexion');
Route::get('/fr/login', 'ProductController@login');
Route::get('/fr/creer-compte', 'ProductController@compte_client');

Route::post('/cart', 'CommandeController@store')->name("commande.store");

Route::get('/fr','ProductController@francais')->name('francais');
Route::get('/en','ProductController@englais')->name('englais');

// Route::get('/','ProductController@index');
Route::get('/boxadmin21', 'AdminController@index');



Route::get('/liste-categories', 'CategorieController@index');
Route::get('/ajout-categorie', 'CategorieController@ajouter_categorie');
Route::post('/save-category', 'CategorieController@save_category');
Route::get('/edit-category/{id}','CategorieController@edit');
Route::post('/update-category/{id}', 'CategorieController@update');
Route::get('/unactive-category/{id}','CategorieController@unactive_category');
Route::get('/active-category/{id}','CategorieController@active_category');

Route::get('/liste-produits', 'ProductController@liste_produits');
Route::get('/ajout-produits', 'ProductController@ajout_produits');
Route::post('/save-produit', 'ProductController@save_product');

Route::get('/detail_produit/{id}', 'ProductController@product_detail');
Route::get('/en/detail_produit/{id}', 'ProductController@product_detail_eng');

Route::get('/en/product_by_category_en/{id}', 'ProductController@show_product_by_category_eng');
Route::get('/product_by_category/{id}', 'ProductController@show_product_by_category');


Route::get('/contact', 'ProductController@contact');
Route::get('/en/contact', 'ProductController@contact_en');

Route::post('/panier/ajouter','CartController@store')->name('cart.store');
Route::delete('/panier/{rowId}','CartController@destroy')->name('cart.destroy');
Route::post('/panier/increase','CartController@increase_qty_product')->name('cart.increase_qty_product');
Route::post('/panier/decrease','CartController@decrease_qty_product')->name('cart.decrease_qty_product');

Route::get('/videpanier', function() {
    Cart::destroy();
});

Route::get('/{en}', function($lang){
  App::setLocale($lang);
  return view('langue_contente');
});

Route::get('/unactive_product/{id}','ProductController@unactive_product');
Route::get('/active_product/{id}','ProductController@active_product');
Route::get('/delete-product/{id}','ProductController@delete_product');
Route::get('/edit-product/{id}','ProductController@edit');







