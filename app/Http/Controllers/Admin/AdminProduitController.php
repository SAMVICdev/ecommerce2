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
        return view('admin.index', compact('produits'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('admin.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $produit = new Produit;
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->categorie_id = $request->categorie_id;

        // Stocker la photo si elle est fournie
        if ($request->hasFile('photo')) {
            $path = $request->photo->store('produits');
            $produit->photo = $path;
        }

        $produit->save();

        return redirect()->route('admin.produits.index')->with('success', 'Produit créé avec succès.');
    }

    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('admin.show')->with(['produit' => $produit]);
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        $categories = Categorie::all();
        return view('admin.edit', compact('produit', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
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
        return redirect()->route('admin.produits.index')->with('success', 'Produit modifié avec succès');
    }

    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->route('admin.produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
