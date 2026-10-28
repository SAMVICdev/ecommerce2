<?php

namespace Database\Seeders;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        // Vide la table produits pour repartir sur une base propre
        Produit::query()->delete();

        $informatique = Categorie::where('nom', 'Informatique')->first();
        $electronique = Categorie::where('nom', 'Électronique')->first();

        Produit::create([
            'nom' => 'Ordinateur Portable Gamer',
            'prix' => 650000,
            'description' => 'PC puissant pour le développement.',
            'categorie_id' => $informatique ? $informatique->id : null
        ]);

        Produit::create([
            'nom' => 'Smartphone Android',
            'prix' => 175000,
            'description' => 'Écran AMOLED et grande autonomie.',
            'categorie_id' => $electronique ? $electronique->id : null
        ]);
    }
}
