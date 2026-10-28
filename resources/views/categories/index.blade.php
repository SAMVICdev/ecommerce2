<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #111827;
        }
        .categories-list {
            list-style: none;
            padding: 0;
        }
        .category-item {
            background-color: white;
            padding: 1rem;
            margin-bottom: 0.75rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .category-link {
            display: block;
            color: #1f2937;
            text-decoration: none;
            font-size: 1.125rem;
            font-weight: 600;
        }
        .category-link:hover {
            color: #4f46e5;
        }
        .product-count {
            color: #6b7280;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Catégories</h1>

        @forelse ($categories as $categorie)
        <ul class="categories-list">
            <li class="category-item">
                <a href="{{ route('categories.show', $categorie->id) }}" class="category-link">
                    {{ $categorie->nom }}
                </a>
                <div class="product-count">{{ $categorie->produits->count() }} produit(s)</div>
            </li>
        </ul>
        @empty
        <p>Aucune catégorie disponible.</p>
        @endforelse
    </div>
</body>
</html>
