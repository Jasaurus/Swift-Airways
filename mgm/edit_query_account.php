<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['uName'];
		$password = $_POST['password'];

				 $validate = "SELECT 'uName' FROM `account` WHERE `uName` = '$username'";
				 $valid = mysqli_query($con, $validate);
		 
				 if(mysqli_num_rows($valid) != 0){

					 echo "<center><label style = 'color:red;'>Username already taken</center></label>";

				 } else {

					
						$query = ("UPDATE `account` SET `name` = '$name', `uName` = '$username', `password` = '$password'
								WHERE `id_no` = '$_REQUEST[admin_id]'") 
								or die(mysqli_error());

				
					$perform = mysqli_query($con, $query);
					header("location:account.php");
				 }

	
	}	