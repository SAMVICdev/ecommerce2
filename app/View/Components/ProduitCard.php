<?php

namespace App\View\Components;

use App\Classes\Produit;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProduitCard extends Component
{
    public function __construct(
        public Produit $produit
    ) {}

    public function render(): View
    {
        return view('components.produit-card');
    }
}
