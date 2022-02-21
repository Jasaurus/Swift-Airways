<?php
	session_start();

    include "connect.php";
	$role = "admin";
	$uName = $_POST['uName'];
	$password = $_POST['password'];

		$select = "SELECT uName, password, type FROM account WHERE uName = '".$uName."' AND password='".$password."'";
		$result = mysqli_query($con, $select);


		if(mysqli_num_rows($result)  != 0 ){
				$row = mysqli_fetch_assoc($result);
			
			if ($row['uName'] === $uName && $row['password'] === $password){
				
					
					$_SESSION['id']=$row['type'];

							if($_SESSION['id'] === $role){

									$_SESSION['SesuName']=$row['uName'];
									echo '<br> Admin Detected';
									header('Location: account.php');

							} else {
									$_SESSION['SesuName']=$row['uName'];
									echo '<br> Admin Detected';
									header('Location: account.php');
							}
					
		
			} else{
					echo'<br> Match Error';
					mysqli_close($con);
			}

		} else {
			header("location:/r/index_.html");
			mysqli_close($con);
		}
	
	

?>