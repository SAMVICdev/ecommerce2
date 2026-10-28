<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $categorie = Categorie::find($id);
        $produits = $categorie->produits; // Récupère les produits associés à la catégorie
        return view('categories.show', compact('categorie', 'produits'));
    }
}
