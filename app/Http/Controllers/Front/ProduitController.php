<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Classes\Produit;
use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\View\View;

class ProduitController extends Controller
{
    public function index()

    {
        $produits = DB::table('produits')->get();

        return view('produits.index', ['produits' => $produits,]);
    }

    public function show($id)
    {
        $produit = DB::table('produits')->where('id', $id)->first();

        return view('produits.show', ['produit' => $produit]);
    }

    // Instanciation des objets produits
    /* $produits = [
            new Produit('Ordinateur Portable', 450000.00, 'PC performant pour le développement.'),
            new Produit('Smartphone', 150000.00, 'Écran OLED et excellente autonomie.'),
            new Produit('Casque Bluetooth', 25000.00, 'Modèle sans fil avec réduction de bruit.'),
            new Produit('Tablette', 300000.00, 'Poids léger et batterie longue durée.'),
            new Produit('Imprimante 3D', 600000.00, 'Idéale pour les projets de prototypage rapide.'),
        ];

        return view('produits.index', compact('produits'));
        */
}
