<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay " . calculatetax(15000,22,11000) . " tax";
	html_footer();
?>
