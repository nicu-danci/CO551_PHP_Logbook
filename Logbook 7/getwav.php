<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect("localhost", "root","", "logbook5");

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
