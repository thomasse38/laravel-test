<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//    public function products () {
//        return view('product-list');
//    }

    public function details_products () {
        return view('product-details');

    }

    public function getData () {
        $data = DB::select('select * from products');
        $data = compact('data');
        return view('product-list')->with($data);
    }

    public function byName () {

        $products = Product::orderBy('name')->get();

        return view('product-by-name',['products' => $products]);
    }

    public function byPrice () {

        $products = Product::orderBy('price')->get();

        return view('product-by-price',['products' => $products]);
    }

    public function byNamePrice () {

        return view('product-name-price',['products' => $products]);
    }
}

