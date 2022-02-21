<?php


	if(ISSET($_POST['add_account'])){
		$name = $_POST['name'];
		$username = $_POST['uName'];
		$password = $_POST['password'];
		$query = "SELECT 'uName' FROM `account` WHERE `uName` = '$username'";
		$valid = mysqli_query($con, $query);

		if(mysqli_num_rows($valid) != 0){
			echo "<center><label style = 'color:red;'>Username already taken</center></label>";
		}else{
			$con->query("INSERT INTO `account` (name, uName, password) VALUES ('$name', '$username', '$password')") or die(mysqli_error());
			header("location:account.php");
			
		}
	}
?>