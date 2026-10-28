<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des Produits</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 p-8">
    <di class="max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-6 text-gray-900">Liste des Produits</h1>

        @foreach ($produits as $produit)
        <x-produit-card :produit="$produit" />
        @endforeach


        <div class="flex justify-center mt-6">
            <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Voir plus de produits</button>
        </div>
</body>

</html>