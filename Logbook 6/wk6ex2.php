<?php	

	// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "logbook5");
if (!$link) {
    echo "Error: Unable to connect to MySQL. <br />";
    echo "Debugging errno: " . mysqli_connect_errno() . "<br />";
    echo "Debugging error: " . mysqli_connect_error() . "<br />";
    exit;
}

	$sql = "SELECT * from test";
	// Execute sql statement
	$result = mysqli_query($link, $sql);
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name] </a>"; 
      echo " <a href=\"wk6ex4action.php?id=$row[name]\">Delete</a><br />";
 	
}
?>
</body>
</html>
