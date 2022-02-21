<?php 
	session_start();
	if(!ISSET($_SESSION['SesuName'])){
		header("location:index_.html");
	}