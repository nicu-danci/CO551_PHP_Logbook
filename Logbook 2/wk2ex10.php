<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // foreach loop here…
  foreach($mymarks as $index => $value)
  {
    echo "for  $index  my grade was  $value <br/>";
  }
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>

<head>
<title>Exercise 10 table</title>
</head>
<body>
<br /><br /><br /><br />
<table border=2 align="left">
<tr><th>Year</th><th>Grade</th></tr> 
<?php
      foreach($mymarks as $index => $value)
  {
    echo "<tr><td> $index </td><td>  $value</td></tr>";
  }
?>
</table>
</body>
</html>

