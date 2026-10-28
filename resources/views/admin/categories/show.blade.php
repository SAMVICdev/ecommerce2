<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Détails de la catégorie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #111827;
        }
        .detail {
            margin-bottom: 1rem;
        }
        .detail strong {
            color: #374151;
            font-weight: 600;
        }
        .detail-value {
            color: #6b7280;
            margin-left: 0.5rem;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 0.875rem;
        }
        .btn-warning { background-color: #f59e0b; }
        .btn-warning:hover { background-color: #d97706; }
        .btn-secondary { background-color: #6b7280; }
        .btn-secondary:hover { background-color: #4b5563; }
        .btn-back {
            margin-right: 0.5rem;
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
        .products-section {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #e5e7eb;
        }
        .products-section h2 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #111827;
        }
        .products-list {
            list-style: none;
            padding: 0;
        }
        .product-item {
            padding: 0.75rem;
            border-bottom: 1px solid #e5e7eb;
        }
        .product-item:last-child {
            border-bottom: none;
        }
        .actions {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('admin.categories.index') }}" class="back-link">← Retour aux catégories</a>
        <h1>Détails de la catégorie</h1>

        <div class="detail">
            <strong>ID:</strong> <span class="detail-value">{{ $categorie->id }}</span>
        </div>
        <div class="detail">
            <strong>Nom:</strong> <span class="detail-value">{{ $categorie->nom }}</span>
        </div>
        <div class="detail">
            <strong>Nombre de produits:</strong> <span class="detail-value">{{ $categorie->produits->count() }}</span>
        </div>

        <div class="products-section">
            <h2>Produits dans cette catégorie</h2>
            @forelse ($categorie->produits as $produit)
            <ul class="products-list">
                <li class="product-item">
                    {{ $produit->nom }} - {{ number_format($produit->prix, 0, ',', ' ') }} FCFA
                </li>
            </ul>
            @empty
            <p>Aucun produit dans cette catégorie.</p>
            @endforelse
        </div>

        <div class="actions">
            <a href="{{ route('admin.categories.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-back">Retour à la liste</a>
        </div>
    </div>
</body>
</html>
