<?php
function showDate()
{
    $date = date ("d-m-Y", strtotime("+1week"));
    $messege = "de datum van vandaag: $date";


    return $messege;
}



function Trafficlight($color, $ambulance)
{
    if ($color == "green" && $ambulance == false)
    {
        $result = "je mag door rijden!";
    }
    else
    {
        $result = "auto moet stoppen";
    }

    return $result;

}
// 5000 euro sparing ik kan elke maand 100 euro inleggen


function SavingGoal($goal, $monthly)
{
    $savings =0;
    $month =0;
    $intrest =1.02;
    $showMessege =true;
    while($savings < $goal)
    {
        $month++;
        $savings = $savings + $monthly;
        $savings=  $savings *$intrest;
        $round=round($savings, 2);
        echo "<br>in Maand $month heb ik $round gespaard</br>";
        if ( $savings >= $goal/2 && $showMessege ==true){
            echo "yippie ik ben op de helft";
            $showMessege =false;
    }
    }
    return "ik heb $month manden nodig om mijn $goal halen";

}
echo savingGoal(5000,100);
?>