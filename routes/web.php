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
Route::get('/connection', function (){
    try {
        DB::connection()->getPdo();
        return 'connection successful';
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
});
//
//Route::get('/', function () {
//    return view('homepage');
//});
//
//Route::get('/product', function () {
//    return ('Liste des produits');
//});
//
//Route::get('/product/{id}', function ($id) {
//    return ('fiche du produit'.$id);
//});
//
//Route::get('/cart', function () {
//    return ('Panier');
//});



use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'home']);
//Route::get('{id}',[ProductController::class,'show']);
Route::get('/product',[ProductController::class, 'products']);
Route::get('/product/{id}', [ProductController::class, 'details_products']);
Route::get('/cart',[CartController::class,'cart']);
Route::get('/product-list',[ProductController::class,'getData']);
Route::get('/product-by-name',[ProductController::class,'byName']);
Route::get('/product-by-price',[ProductController::class,'byPrice']);
Route::get('/product-name-price',[ProductController::class,'byNamePrice']);
Route::get('/formulaire',[\App\Http\Controllers\formulaireproduit::class,'byNamePrice']);






