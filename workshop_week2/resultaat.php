<?php
/*
 * Name: Y. ghalit
 * Date: 24-02-2026
 *
 */

//var_dump($_POST);

//controleren of een formulier gestuurt is
if(isset($_POST["form_verzonden"]))
{
    $naam=$_POST['Naam'];
    $email=$_POST['email'];
    $leeftijd=$_POST['leeftijd'];

    echo "<br>naam"$naam;

    echo "<br>leeftijd"$leeftijd +10;



    echo "<br>email"$email;


    if(isset($_POST["Gender"]))
    {
        $Gender=$_POST['Gender'];
        echo $Gender;
    }
}
else
{
    echo "u komt niet vanaf de formulier";
}





