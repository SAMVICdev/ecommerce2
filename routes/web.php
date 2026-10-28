<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

// Redirige la racine directement vers votre contrôleur de produits
Route::get('/', [ProduitController::class, 'index']);

Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');

Route::get('/categories/{id}', [CategorieController::class, 'show'])->name('categories.show');

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
