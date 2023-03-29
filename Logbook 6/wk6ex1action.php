<?php
$sql = "INSERT INTO test (name,email,phone_number) ";
$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

// Connect to server and select database
$link = mysqli_connect("localhost", "root", "", "logbook5");
if (!$link) {
    echo "Error: Unable to connect to MySQL. <br />";
    echo "Debugging errno: " . mysqli_connect_errno() . "<br />";
    echo "Debugging error: " . mysqli_connect_error() . "<br />";
    exit;
}

// Execute sql statement
if (mysqli_query($link, $sql)) {
    echo "Data saved successfully. <br /> <br />";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

// Execute SQL statement and display results
$sql = "SELECT * FROM test";
$result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_assoc($result)) 
    {
        echo "$row[name] $row[email] $row[phone_number] <br />";
        
    }

// Free result set and close connection
mysqli_free_result($result);
mysqli_close($link);
?>
