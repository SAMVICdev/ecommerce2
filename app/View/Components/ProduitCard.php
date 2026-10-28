<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProduitCard extends Component
{
    public function __construct(
        public $produit
    ) {}

    public function render(): View
    {
        return view('components.produit-card');
    }
}
