<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie - {{ $categorie->nom }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #111827;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        .product-card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .product-name {
            font-size: 1.125rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        .product-price {
            color: #4f46e5;
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        .product-description {
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            color: white;
            text-decoration: none;
            background-color: #4f46e5;
        }
        .btn:hover {
            background-color: #4338ca;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 1rem;
            color: #6b7280;
            text-decoration: none;
        }
        .back-link:hover {
            color: #111827;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('categories.index') }}" class="back-link">← Retour aux catégories</a>
        <h1>Catégorie : {{ $categorie->nom }}</h1>

        @forelse ($produits as $produit)
        <div class="products-grid">
            <div class="product-card">
                <div class="product-name">{{ $produit->nom }}</div>
                <div class="product-price">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</div>
                <div class="product-description">{{ $produit->description }}</div>
                <a href="{{ route('produits.show', $produit->id) }}" class="btn">Voir détails</a>
            </div>
        </div>
        @empty
        <p>Aucun produit dans cette catégorie.</p>
        @endforelse
    </div>
</body>
</html>
