<?php

  header("Content-type: image/jpeg");

  $conn = mysqli_connect("localhost", "root","", "logbook5");

  $sql = "SELECT image FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>
