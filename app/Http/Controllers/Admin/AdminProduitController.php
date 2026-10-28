<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\support\Facades\Storage;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('admin.produits.index', compact('produits'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('admin.produits.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $produit = new Produit;
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->categorie_id = $request->categorie_id;

        // l'endroit ou les données seront stockée

        $path = $request->photo->store('produits');

        $produit->photo = $path;
        $produit->save();

        return redirect()->route('admin.produits.edit', $produit->id)->with('success', 'Produit modifié avec succès')->with('success', 'Produit créé avec succès.');
    }

    public function show(Produit $produit)
    {
        return view('admin.produits.show')->with(['produit' => $produit]);
    }

    public function update(Request $request, Produit $produit)
    {
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->categorie_id = $request->categorie_id;

        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo si elle existe
            if ($produit->photo) {
                Storage::delete($produit->photo);
            }
            // Stocker la nouvelle photo
            $path = $request->photo->store('produits');
            $produit->photo = $path;
        }

        $produit->save();
        return redirect()->route('admin.produits.edit', $produit->id)->with('success', 'Produit modifié avec succès');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('admin.produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
