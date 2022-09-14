<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products () {
        return ('Liste des produits');
    }

    public function details_products ($id) {
        return ('Fiche du produits'.$id);
    }
}
