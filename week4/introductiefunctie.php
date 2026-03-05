<?php
/*
 * Y.ghalit
 * Date: 5-03-2016
 *
 * verbinden met een DB en gegevengs ophalen
 */
//includen van dp funcies

include "../includes/db_functions.php";

//database verbinding starten
StartConnection("world");

//schijven van de Quary
$query= "SELECT * FROM country";

//uitvoeren van de Query
$result = ExecuteSelectQuery($query);

//loop resultaten
foreach($result as $row){
    echo $row["name"];


}