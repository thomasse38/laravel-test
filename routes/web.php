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
//
//Route::get('/', function () {
//    return ('homepage');
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
Route::get('/product',[ProductController::class, 'products']);
Route::get('/product/{id}', [ProductController::class, 'details_products']);
Route::get('/cart',[CartController::class,'cart']);
