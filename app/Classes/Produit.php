<?php

namespace App\Classes;

class Produit
{
    public function __construct(
        public readonly string $nom,
        public readonly float $prix,
        public readonly string $description
    ) {}
}
