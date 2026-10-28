<?php

namespace App\Http\Controllers\Front;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $categorie = Categorie::with('produits')->findOrFail($id);
        $produits = $categorie->produits;
        return view('categories.show', compact('categorie', 'produits'));
    }
}
