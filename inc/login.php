<?php

	    $conn=mysqli_connect('localhost','root','','coffeeshop');

		$usename= $_POST['username'];
		$usepass= $_POST['password'];

		$user_login=mysqli_query($conn,"SELECT * FROM userinfo WHERE username='$usename'AND password='$usepass'");

		$user_num=mysqli_num_rows($user_login);

		if($user_num==1){
			header ('location:../home.php');
		}
		else{
			echo "Inavalid usename or password!";
		}
?> 