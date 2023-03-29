<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(22000,22) . " tax";
	html_footer();
?>

