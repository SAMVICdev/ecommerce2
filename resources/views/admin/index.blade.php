<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Liste des Produits</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background-color: #f9fafb;
            font-weight: 600;
            color: #374151;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            color: white;
            text-decoration: none;
            margin-right: 0.5rem;
            border: none;
            cursor: pointer;
            font-size: 0.875rem;
        }
        .btn-primary { background-color: #4f46e5; }
        .btn-primary:hover { background-color: #4338ca; }
        .btn-info { background-color: #0ea5e9; }
        .btn-info:hover { background-color: #0284c7; }
        .btn-warning { background-color: #f59e0b; }
        .btn-warning:hover { background-color: #d97706; }
        .btn-danger { background-color: #ef4444; }
        .btn-danger:hover { background-color: #dc2626; }
        .btn-secondary { background-color: #6b7280; }
        .btn-secondary:hover { background-color: #4b5563; }
        .btn-success { background-color: #10b981; }
        .btn-success:hover { background-color: #059669; }
        .actions {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        .actions form {
            display: inline;
        }
        .add-btn {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Produits (Admin)</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $produit->categorie->nom ?? 'N/A' }}</td>
                    <td>
                        @if ($produit->photo)
                            <img src="{{ asset('/storage/' . $produit->photo) }}" alt="{{ $produit->nom }}" width="50">
                        @else
                            Pas d'image
                        @endif
                    </td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.produits.show', $produit->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('admin.produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.produits.destroy', $produit->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Aucun produit disponible.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="add-btn">
            <a href="{{ route('admin.produits.create') }}" class="btn btn-primary">Créer un nouveau produit</a>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary" style="margin-left: 0.5rem;">Gérer les catégories</a>
        </div>
    </div>
</body>
</html>
