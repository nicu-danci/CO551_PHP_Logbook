<?php

$mymarks["CO555"] = 75;
$mymarks["CO476"] = 63;
$mymarks["CO426"] = 72;
$mymarks["CO516"] = 58;
$mymarks["CO613"] = 69;
$mymarks["CO345"] = 82;

$total = 0;

foreach($mymarks as $index => $marks)
{
    echo "For $index module my mark  was: $marks <br />";
    $total = $total + $mymarks[$index];
}

$average = $total /  6;    

echo "<br />Your average mark was: $average";
?>