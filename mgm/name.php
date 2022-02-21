<?php
	require 'connect.php';
	
	$query = $con->query("SELECT * FROM `account` WHERE `uName` = '$_SESSION[SesuName]'") 
			or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['uName'];
?>