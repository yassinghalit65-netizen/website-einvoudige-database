<?php
include "../includes/db_functions.php";
StartConnection("pokemondb");
?>


<!doctype html>
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
    <p>pokedex</p>
    <form action="pokimon_dp.php" method="GET">
        <a href="pokimontoevoegen.php">voeg toe</a>
    <fieldset>

        <label> zoekbalk</label>
        <select id="type"  name="searchType1">
            <?php

        $type1Quary ="SELECT DISTINCT type1 FROM pokemon";

        $type1 = ExecuteSelectQuery($type1Quary);

        foreach ($type1 as $item)
        {
            echo "<option>" . $item["type1"] . "</option>";
        }
        ?>
        </select>

        <input type="text" name="searchname">

        <input type="submit" name="searchForm" value="Zoeken";

    </fieldset>

    </form>




    <?php
    // code pm het zoekvelod te laten werken
    if(isset($_GET["searchForm"]))
    {
        $searchName = $_GET["searchname"];
        $searchType1 = $_GET["searchType1"];
        if(isset($searType1))
        {
            $quary ="SELECT * FROM pokemon WHERE type1 = '$searchType1' AND name LIKE '%$searchName%' ;";
        }

        $query ="SELECT * FROM pokemon WHERE name LIKE '%$searchName%'";
        echo "<div><h2></h2>u heeft gezocht op". $searchName ."</h2></div>";
    }
    else
    {
        $query = "SELECT * FROM pokemon;";
    }



    $result = ExecuteSelectQuery($query);

    foreach ($result as $row) {
        $name = $row["name"];
        $img = $row["picture"];
        $number =$row["number"];

        echo "<article>";
        echo $row["name"] . "<br>";
        echo "<img src='$img' alt='$name' width='50'>";
        echo "<a href='pokimon_bewerken.php?pokemonNumber=$number'>bewerken<a/> ";
        echo "</article>";

    }
    ?>


</main>
</body>
</html>

