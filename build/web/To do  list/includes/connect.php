<?php
	$server = "localhost";
	$db_name = "users"; // Enter your database name
	$db_user = "root"; // Enter your username
	$db_pass = ""; // Enter your password
	

	mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
	
?>