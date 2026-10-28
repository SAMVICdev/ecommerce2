<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ProduitController extends Controller

{
    public function index()

    {
        $produits = Produit::all();

        return view('produits.index', ['produits' => $produits,]);
    }

    public function show($id)
    {
        $produit = Produit::findOrFail($id);

        return view('produits.show', compact('produit'));
    }
}
