<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }
        .container {
            max-width: 640px;
            margin: 0 auto;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #111827;
        }
        .produit-card {
            padding: 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            background-color: white;
            margin-bottom: 1rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .produit-price {
            color: #4f46e5;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .produit-description {
            color: #4b5563;
            font-size: 0.875rem;
            margin-top: 0.25rem;
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
        .center {
            text-align: center;
            margin-top: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $produit->nom }}</h1>

        <div class="produit-card">
            <div class="produit-price">{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</div>
            <div class="produit-description">{{ $produit->description }}</div>
        </div>

        <div class="center">
            <a href="{{ route('produits.index') }}" class="btn">Retour à la liste</a>
        </div>
    </div>
</body>

</html>
