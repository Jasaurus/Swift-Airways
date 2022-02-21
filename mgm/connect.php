<?php 

    $host = "localhost";
    $user = "root";
    $password = ""; 
    $dbname = "test"; 

    $con = mysqli_connect($host, $user, $password, $dbname);

    if (!$con){
        die(mysqli_connect_error());
    }
    else{
        
    }
   
?>