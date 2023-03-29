<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
    $tax = $gross *22/100;
    $net = $gross - $tax;
    echo "Your gross wage is: " . $gross . "<br /> ";
    echo "The ammount of tax paid: " . $tax . "<br />";
    echo "Your net wage is: " . $net;
?>
</body>
</html>
