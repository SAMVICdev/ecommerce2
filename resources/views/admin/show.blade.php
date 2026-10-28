<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Détails du produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }
        .container {
            max-width: 600px;
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
        .product-image {
            margin-top: 0.5rem;
        }
        .product-image img {
            max-width: 300px;
            border: 1px solid #e5e7eb;
            border-radius: 0.25rem;
        }
        .actions {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Détails du produit</h1>

        <div class="detail">
            <strong>ID:</strong> <span class="detail-value">{{ $produit->id }}</span>
        </div>
        <div class="detail">
            <strong>Nom:</strong> <span class="detail-value">{{ $produit->nom }}</span>
        </div>
        <div class="detail">
            <strong>Description:</strong> <span class="detail-value">{{ $produit->description }}</span>
        </div>
        <div class="detail">
            <strong>Prix:</strong> <span class="detail-value">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</span>
        </div>
        <div class="detail">
            <strong>Catégorie:</strong> <span class="detail-value">{{ $produit->categorie->nom ?? 'N/A' }}</span>
        </div>
        <div class="detail">
            <strong>Image:</strong>
            @if ($produit->photo)
                <div class="product-image">
                    <img src="{{ asset('/storage/' . $produit->photo) }}" alt="{{ $produit->nom }}">
                </div>
            @else
                <span class="detail-value">Pas d'image</span>
            @endif
        </div>

        <div class="actions">
            <a href="{{ route('admin.produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
            <a href="{{ route('admin.produits.index') }}" class="btn btn-secondary btn-back">Retour à la liste</a>
        </div>
    </div>
</body>
</html>
