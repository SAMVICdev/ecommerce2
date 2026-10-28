<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        // Vide la table produits pour repartir sur une base propre
        Produit::truncate();

        Produit::create([
            'nom' => 'Ordinateur Portable Gamer',
            'prix' => 650000,
            'description' => 'PC puissant pour le développement.'
        ]);

        Produit::create([
            'nom' => 'Smartphone Android',
            'prix' => 175000,
            'description' => 'Écran AMOLED et grande autonomie.'
        ]);
    }
}<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        // Vide la table produits pour repartir sur une base propre
        Produit::truncate();

        Produit::create([
            'nom' => 'Ordinateur Portable Gamer',
            'prix' => 650000,
            'description' => 'PC puissant pour le développement.'
        ]);

        Produit::create([
            'nom' => 'Smartphone Android',
            'prix' => 175000,
            'description' => 'Écran AMOLED et grande autonomie.'
        ]);
    }
}