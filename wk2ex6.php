<?php
  $marks[0] = 65;
  $marks[3] = 55;
  $marks[] = 76;
  $marks[1] = "";
  $marks[2] = "";
  $marks[5] = "";
  
  
  echo " Index 0 = $marks[0] <br/>";
  echo " Index 1 = $marks[1] <br/>";
  echo " Index 2 = $marks[2] <br/>";
  echo " Index 3 = $marks[3] <br/>";
  echo " Index 4 = $marks[4] <br/>";
  echo " Index 5 = $marks[5] <br/>"; 

  // If we do not specify an index position i.e. []  where will PHP insert the value?

  echo "<br /> If we do not specify an index position i.e. [] PHP will insert the value to the next index position ([4] this exercise).<br />";
  echo "I've also given a empty value to index 1,2 and 5.If not the script will throw an warning.";
?>

