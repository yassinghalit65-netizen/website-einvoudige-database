<!doctype html>
<?php
    /*
     * Author Y.Ghalit
     * Date 6-2-2026
     *homepage workshop week 1
     */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css";
</head>
<body>
    <?php
        echo "<h1>Hallo World!</h1>";
    ?>
    <h2>
        koptext
    </h2>
    <?php
        echo "<p>Hello World!</p>";

        echo "Hello World!";
        echo "Hello World!";
    ?>

    <?php
      $firstName = "Yassin"; //sting
      $lastName = "Ghalit";
      $age = 18; // integer
      $isStudent = false;// Boolean

    // opdrach mijn naam is en agternaam met leeftijd

                echo "<p>Mijn naam is $firstName $lastName en mijn leeftijd is $age</p>";
     $leefTijd = $age + 10;
                echo "<p>$firstName is over 10 jaar $leefTijd</p>";;
    ?>


</body>
</html>


