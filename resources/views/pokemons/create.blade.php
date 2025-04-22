<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Pokémon</title>
</head>
<body>
    <h1>Ajouter un Pokémon</h1>

    <form action="/pokemons" method="POST">
        @csrf 

        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="name" required>
        </div>

        <div>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" required>
        </div>

        <div>
            <label for="niveau">Niveau:</label>
            <input type="number" id="niveau" name="niveau" required>
        </div>

        <button type="submit">Ajouter</button>
    </form>

    <a href="{{ route('pokemons.index') }}">Retour à la liste</a>
</body>
</html>