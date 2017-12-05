<?php
	$host = "localhost";
	$username = "aplaceo3_iClient";
	$password = "Circa7578";
	$db = "aplaceo3_fluidity";
	
	mysql_connect($host, $username, $password) or die(mysql_error());
	mysql_select_db($db);
?>