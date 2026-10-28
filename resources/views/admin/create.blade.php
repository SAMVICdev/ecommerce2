<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Créer un produit</title>
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
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #374151;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.25rem;
            font-size: 1rem;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
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
        .btn-success { background-color: #10b981; }
        .btn-success:hover { background-color: #059669; }
        .btn-secondary { background-color: #6b7280; }
        .btn-secondary:hover { background-color: #4b5563; }
        .btn-back {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Créer un produit</h1>

        @if ($errors->any())
            <div style="background-color: #fee2e2; border: 1px solid #fecaca; color: #991b1b; padding: 1rem; border-radius: 0.25rem; margin-bottom: 1rem;">
                <ul style="margin: 0; padding-left: 1.5rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.produits.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required placeholder="Ex: Ordinateur Portable">
            </div>
            <div class="form-group">
                <label for="prix">Prix (FCFA)</label>
                <input type="number" name="prix" id="prix" step="0.01" min="0" required placeholder="Ex: 500000">
            </div>
            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select name="categorie_id" id="categorie_id" required>
                    <option value="">-- Sélectionner une catégorie --</option>
                    @forelse ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                    @empty
                        <option value="">Aucune catégorie disponible</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Description du produit..."></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Image</label>
                <input type="file" name="photo" id="photo" accept="image/*">
                <small style="color: #6b7280; font-size: 0.875rem;">Formats acceptés: JPG, PNG, GIF</small>
            </div>
            <div style="margin-top: 1.5rem;">
                <button type="submit" class="btn btn-success">Créer</button>
                <a href="{{ route('admin.produits.index') }}" class="btn btn-secondary btn-back">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>
