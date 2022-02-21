<?php
	 require_once 'connect.php';

	//$query= "DELETE FROM `admin` WHERE `id_no` = '$_REQUEST[admin_id]'") or die(mysqli_error());

	 $con->query("DELETE FROM `account` WHERE `id_no` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	 header("location: account.php");