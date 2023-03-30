<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
</head>

<body>
    <form>
        <label for="id">ID :</label>
        <input type="text" id="id" name="id"><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="type">Type :</label>
        <select id="type" name="type">
            <option value="">--Choisir un type--</option>
            <option value="Steel">Acier</option>
            <option value="Dragon">Dragon</option>
            <option value="Electric">Electrique</option>
            <option value="Fire">Feu</option>
            <option value="Bug">Insecte</option>
            <option value="Grass">Plante</option>
            <option value="Psychic">Psy</option>
            <option value="Ground">Sol</option>
            <option value="Dark">Tenebre</option>
            <option value="Fighting">Combat</option>
            <option value="Water">Eau</option>
            <option value="Fairy">Fée</option>
            <option value="Ice">Glace</option>
            <option value="Normal">Normal</option>
            <option value="Poison">Poison</option>
            <option value="Rock">Roche</option>
            <option value="Ghost">Spectre</option>
            <option value="Fly">Vol</option>
        </select><br>
        <input type="button" id="button" value="Filtrer" onclick="filtrer()">
    </form>
    <p id="result"></p>
</body>

</html>
<script src="./script.js"></script>