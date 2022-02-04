<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "bd_iica_atualizado";
	
	$conn = new MySQLi($host, $user, $pass, $db);
	
	if(mysqli_connect_errno())
		trigger_error(mysqli_connect_error());
	
?>