<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Pokémons</title>
</head>
<body>
    <h1>Liste de Pokémons</h1>

    <ul>
        @foreach($pokemons as $pokemon)
            <li>{{ $pokemon->nom }} (Type: {{ $pokemon->type }}, Niveau: {{ $pokemon->niveau }})</li>
        @endforeach
    </ul>

    <a href="{{ route('pokemons.create') }}">Ajouter un Pokémon</a>
</body>
</html>