<div>
    <h1>Categories</h1>
    <ul>
        @foreach ($categories as $categorie)
        <li>
            <a href="{{ route('categories.show', $categorie->id) }}">
                {{ $categorie->nom }}
            </a>
        </li>
        @endforeach
    </ul>
</div>