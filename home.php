<?php
include('dbconnection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWindow</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div class="contaner">

	<div class="home-details">
		<form action="" method="POST" >

			<input type="submit" name="customer" value="Customer Details" class="btn"><br><br>
			<input type="submit" name="employee" value="Employee Details" class="btn"><br><br>
			<input type="submit" name="coffee"   value="Coffee Details"   class="btn"><br><br>
			<input type="submit" name="search"   value="Search"           class="btn"><br><br>
            <input type="submit" name="logout"   value="Logout"           class="btn"><br><br>
			
		
		</form>

<?php

if(isset($_POST['logout'])){

    	header("location: logout.php");

}

if(isset($_POST['customer'])){

    	header("location: customer.php");

}


if(isset($_POST['employee'])){

    	header("location: employee.php");

}

if(isset($_POST['coffee'])){

    	header("location: coffee.php");

}


if(isset($_POST['search'])){

    	header("location: search.php");

}





?>


		</div>	
	</div>
</body>
</html>