<?php
/*
 * Y.Ghalit
 * Date:06-03-2016
 * pokedex indexpagina
 */

//dp functions includen

include "../includes/db_functions.php";
// maken van een dp conection
StartConnection("pokemondb");

//$query = "SELECT * FROM pokemon WHERE type1 = 'fire' OR type1 = 'Water';";
$query = "SELECT * FROM pokemon;";
//Uitvoeren van de quary op de database
$result = ExecuteSelectQuery($query);

foreach($result as $row)
{
    $img = $row ["picture"];
    $name = $row["name"];
    echo "<article>";
    echo $name. "<br>";
    echo "<img src='$img' alt='$name' width='50'>'";
    echo "</article>";
}

