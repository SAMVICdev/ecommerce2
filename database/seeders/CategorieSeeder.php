<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        Categorie::query()->delete();

        Categorie::create([
            'nom' => 'Électronique'
        ]);

        Categorie::create([
            'nom' => 'Informatique'
        ]);

        Categorie::create([
            'nom' => 'Accessoires'
        ]);
    }
}
