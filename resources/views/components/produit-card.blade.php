<div>
    <div class="p-4 border rounded-lg shadow-sm bg-white mb-4">
        <h3 class="text-lg font-bold text-gray-800">{{ $produit->nom }}</h3>
        <p class="text-indigo-600 font-semibold">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</p>
        <p class="text-gray-600 text-sm mt-1">{{ $produit->description }}</p>
    </div>
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">

    </header>
</div>