<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products () {
        return ('LISTE DES PRODUITS');
    }

    public function details_products ($id) {
        return ('FICHE DU PRODUITS '.$id);
    }
}
