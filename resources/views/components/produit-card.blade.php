<div>
    <div class="p-4 border rounded-lg shadow-sm bg-white mb-4">
        <h3 class="text-lg font-bold text-gray-800">{{ $produit->nom }}</h3>
        <p class="text-indigo-600 font-semibold">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</p>
        <p class="text-gray-600 text-sm mt-1">{{ $produit->description }}</p>
        <a href="{{ route('produits.show', $produit->id) }}" class="text-indigo-600 hover:text-indigo-800 text-sm mt-2 inline-block">Voir détails</a>
    </div>
</div>