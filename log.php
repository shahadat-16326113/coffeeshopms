<?php
include('dbconnection.php');
error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log-in</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
	<div class="contaner"> 
		<div class="login-section">
			<img src="img/administrator.png" alt="admin">
			<h3>USER LOGIN</h3>
		<form action="inc/login.php" method="POST" >
			<input type="text" name="username" placeholder="User name" class="from-control"><br><br>
			<input type="password" name="password" placeholder="Password" class="from-control"><br><br>
			<input type="submit" value="Login" class="btn">
		</form>


		<a href="registration.php"><p>Don't have an account?SignUp Now.</p></a>

	</div>
	

		 <div class="errormassage">
		 	<?php 

		 		if($_POST['result']){
		 			if($_POST['result']=='khali'){


		 				echo "<h3>*Fill all the information!</h3>";
		 			}
		 		}
		 		
		 	?>


		 </div>

		
		
	</div> 
	
</body>
</html>