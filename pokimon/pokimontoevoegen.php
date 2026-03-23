<?php
/*
 * Author: yassin ghalit
 * date: 18-3-2026
 * Toevoegen van een pokemon aan de database
 *
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>

<main>
    <a href="pokimon_dp.php">
    <h1>Pokedox</h1>
    </a>
<
</main>

<?php
if(isset($_POST["submitForm"])) {
    // var_dump($_POST);

    $number = $_POST["pokemonNumber"];
    $name = $_POST["pokemonName"];
    $type1 = $_POST["pokemonType1"];
    $type2 = $_POST["pokemonType2"];
    $ability = $_POST["pokemonAbility"];
    $species = $_POST["pokemonSpecies"];
    $picture = $_POST["pokemonPicture"];

    echo $query = "INSERT INTO pokemon VALUES ('$number','$name','$type1', '$type2', '$ability', '$species', '$picture');";


    include "../includes/db_functions.php";

    StartConnection("pokimondb");

    $rowseffected = ExucuteQuery($query);

    if ($rowseffected >= 1) {
        echo "u heeft een pokimon toegevoegd";

    } else {
        echo "Helaas het is fout gegaan";
    }
}



?>
<form action="pokemon_toevoegen.php" method="POST">
    <fieldset>

        <p>
            <label for="number">Number</label>
            <input type="text" name="pokemonNumber" id="number">
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="pokemonName" id="name">
        </p>
        <p>
            <label for="type1">Type1</label>
            <input type="text" name="pokemonType1" id="type1">
        </p>
        <p>
            <label for="type2">Type2</label>
            <input type="text" name="pokemonType2" id="type2">
        </p>
        <p>
            <label for="ability">Ability</label>
            <input type="text" name="pokemonAbility" id="ability">
        </p>
        <p>
            <label for="species">Species</label>
            <input type="text" name="pokemonSpecies" id="species">
        </p>
        <p>
            <label for="picture">Picture</label>
            <input type="text" name="pokemonPicture" id="picture">
        </p>

        <p>
            <input type="submit" name="submitForm">
        </p>
    </fieldset>
</form>
</body>
</html>
