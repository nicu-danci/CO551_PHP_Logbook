<?php
  if ($_POST["txtage"] < 21 & $_POST["txtgender"] =="male") 
  {
	echo "You are under 21 years old male<br/>";
  }
  else if ($_POST["txtage"] >= 21 & $_POST["txtgender"] =="male")
  {
	echo "You are  21 years old or over male<br/>";
  }
  else if ($_POST["txtage"] >= 21 & $_POST["txtgender"] =="female")
  {
	echo "You are  21 years old or over female<br/>";
  }
  else if ($_POST["txtage"] < 21 & $_POST["txtgender"] =="female")
  {
	echo "You are  under 21 years old female<br/>";
  }
  else if ($_POST["txtgender"]!="male" || "female")
  {
    echo "You need to make up your mind.";
  }
?>

