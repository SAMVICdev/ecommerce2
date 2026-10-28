<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ProduitController;
use App\Http\Controllers\Front\CategorieController;
use App\Http\Controllers\Admin\AdminProduitController;


// Redirige la racine directement vers votre contrôleur de produits
Route::get('/', [ProduitController::class, 'index'])->name('produits.index');

Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');

Route::get('/categories/{id}', [CategorieController::class, 'show'])->name('categories.show');

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');

// Admin routes 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('produits')->name('produits.')->group(function () {
        Route::get('/', [AdminProduitController::class, 'index'])->name('index');
        Route::get('/create', [AdminProduitController::class, 'create'])->name('create');
        Route::post('/', [AdminProduitController::class, 'store'])->name('store');
        Route::get('/{produit}', [AdminProduitController::class, 'show'])->name('show');
        Route::get('/{produit}/edit', [AdminProduitController::class, 'edit'])->name('edit');
        Route::put('/{produit}', [AdminProduitController::class, 'update'])->name('update');
        Route::delete('/{produit}', [AdminProduitController::class, 'destroy'])->name('destroy');
    });
});
