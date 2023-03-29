<?php
// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "logbook5");
if (!$link) {
    echo "Error: Unable to connect to MySQL. <br />";
    echo "Debugging errno: " . mysqli_connect_errno() . "<br />";
    echo "Debugging error: " . mysqli_connect_error() . "<br />";
    exit;
}

// Get the values from the form
$name = $_POST["txtname"];
$telno = $_POST["txttelno"];
$email = $_POST["txtemail"];

// Update the record in the database
$sql = "UPDATE test SET phone_number='$telno', email='$email' WHERE name='$name'";
$result = mysqli_query($link, $sql);

header("Location: wk6ex2.php");
?>

