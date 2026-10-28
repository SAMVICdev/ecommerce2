<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    /** @use HasFactory<\Database\Factories\ProduitFactory> */
    use HasFactory;
    protected $fillable = [
        'nom',
        'prix',
        'description'
    ];
}



/*dans le dossier model permettant de créer les colonnes lié au factory.*/