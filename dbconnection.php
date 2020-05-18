<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "coffeeshop";

$con= mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	echo "Connection ok!";
}

else{
	die("Connection failed".mysqli_connect_error());
}


?>