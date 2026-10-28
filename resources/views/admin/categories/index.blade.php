<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Catégories</title>
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
        .btn-warning { background-color: #f59e0b; }
        .btn-warning:hover { background-color: #d97706; }
        .btn-danger { background-color: #ef4444; }
        .btn-danger:hover { background-color: #dc2626; }
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
        <a href="{{ route('admin.produits.index') }}" class="back-link">← Retour aux produits</a>
        <h1>Catégories (Admin)</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Nombre de produits</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->nom }}</td>
                    <td>{{ $categorie->produits->count() }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.categories.show', $categorie->id) }}" class="btn btn-warning">Voir</a>
                            <a href="{{ route('admin.categories.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.categories.destroy', $categorie->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Aucune catégorie disponible.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="add-btn">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Créer une nouvelle catégorie</a>
        </div>
    </div>
</body>
</html>
