<?php
	$host ="localhost";
	$user="magana0_coachlab";
	$pass="coachlabdb12";
	$db="magana0_coachlabdb";
	
	$db_conx = mysqli_connect($host,$user,$pass);
	mysqli_select_db($db_conx,$db);	
?>
