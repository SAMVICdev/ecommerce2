<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
        ]);

        Categorie::create($validated);

        return redirect()->route('admin.categories.index')->with('success', 'Catégorie créée avec succès.');
    }

    public function show($id)
    {
        $categorie = Categorie::with('produits')->findOrFail($id);
        return view('admin.categories.show', compact('categorie'));
    }

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('admin.categories.edit', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
        ]);

        $categorie->update($validated);

        return redirect()->route('admin.categories.index')->with('success', 'Catégorie modifiée avec succès.');
    }

    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
