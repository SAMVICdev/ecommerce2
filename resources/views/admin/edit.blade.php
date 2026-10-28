<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Modifier le produit</title>
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
        .current-image {
            margin-top: 0.5rem;
        }
        .current-image img {
            max-width: 200px;
            border: 1px solid #e5e7eb;
            border-radius: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier le produit</h1>
        <form action="{{ route('admin.produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ $produit->nom }}" required>
            </div>
            <div class="form-group">
                <label for="photo">Image</label>
                <input type="file" name="photo" id="photo">
                @if ($produit->photo)
                    <div class="current-image">
                        <p>Image actuelle :</p>
                        <img src="{{ asset('storage/' . $produit->photo) }}" alt="{{ $produit->nom }}">
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description">{{ $produit->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix" step="0.01" value="{{ $produit->prix }}" required>
            </div>
            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select name="categorie_id" id="categorie_id">
                    @forelse ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $produit->categorie_id == $categorie->id ? 'selected' : '' }}>
                            {{ $categorie->nom }}
                        </option>
                    @empty
                        <option value="">Aucune catégorie disponible</option>
                    @endforelse
                </select>
            </div>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="{{ route('admin.produits.index') }}" class="btn btn-secondary btn-back">Annuler</a>
        </form>
    </div>
</body>
</html>
