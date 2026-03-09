

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
    <fieldset>
        <label> zoeken</label>
        <input type="text" name="searchname">

        <input type="submit" name="searchForm" value="Zoeken"
    </fieldset>
    </form>


    <?php
    // code pm het zoekvelod te laten werken
    if(isset($_GET["searchForm"]))
    {
        $searchName = $_GET["searchname"];

        $query ="SELECT * FROM pokemon WHERE name LIKE '%$searchName%'";
    }
    else
    {
        $query = "SELECT * FROM pokemon;";
    }


    include "../includes/db_functions.php";

    StartConnection("pokemondb");



    $result = ExecuteSelectQuery($query);

    foreach ($result as $row) {
        $name = $row["name"];
        $img = $row["picture"];
        echo "<article>";
        echo $row["name"] . "<br>";
        echo "<img src='$img' alt='$name' width='50'>";
        echo "</article>";
    }
    ?>

</main>
</body>
</html>

