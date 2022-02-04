<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "Z";
	
	$conn = new MySQLi($host, $user, $pass, $db);
	
	if(mysqli_connect_errno())
		trigger_error(mysqli_connect_error());
	
?>