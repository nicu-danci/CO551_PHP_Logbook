<?php

// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "logbook5");
if (!$link) {
    echo "Error: Unable to connect to MySQL. <br />";
    echo "Debugging errno: " . mysqli_connect_errno() . "<br />";
    echo "Debugging error: " . mysqli_connect_error() . "<br />";
    exit;
}

// Get the ID from the URL parameter
$id = $_GET["id"];

// Delete the record from the database
$sql = "DELETE FROM test WHERE name='$id'";
$result = mysqli_query($link, $sql);

header("Location: wk6ex2.php");
?>
