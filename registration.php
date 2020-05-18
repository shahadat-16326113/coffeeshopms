<?php
include('dbconnection.php');
?>

<script type="text/javascript">
	
	function validateform()
	{
		    var fullname         =document.myform.fullname.value;  
        var username         =document.myform.username.value;
        var email            =document.myform.email.value;
        var atposition       =email.indexOf("@");  
        var dotposition      =email.lastIndexOf(".");  
        var password         =document.myform.password.value;
        var phone            =document.myform.phone.value;
        var genderM          =myform.gender;
        var genderF          =myform.gender;
        var birthday         =document.myform.birthday.value;

        
        if (fullname==null || fullname=="")
        {  
          alert("fullName can't be blank");  
          return false;  
        }  
        else if(username==null || username=="")
        {  
          alert("userName can't be blank");  
          return false;  
        }
        else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
        {  
          alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
          return false;  
        }
        else if(password=="" || password.length<6)
        {  
          alert("Password can't empty and  must be at least 6 characters long.");  
          return false;  
        } 
        else if(phone=="")
        {
          alert("phoneNumber can't be blank");  
          return false;

        }  
        else if(genderM.checked==false && genderF.checked==false ) 
        {
          alert("You must select male or female");
          return false;
        } 
        else if(birthday==null || birthday=="")
        {
        	alert("birthday can't be blank");
        	return false;
        }
}  

</script>




<!DOCTYPE html>
<html>
	<head>
		<title>User Registration</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

    <body >
		<section>
			<div class="reg">

				<h1 style="text-align: center;">Registration Details</h1>

				<form name="myform" action="" method="POST" onsubmit="return validateform()">

					<input type="text" name="fullname" placeholder="Full Name" class="in"><br><br>
					<input type="text" name="username" placeholder="User Name" class="in"><br><br>	
					<input type="email" name="email" placeholder="Enter Email Address" class="in"><br><br>	
					<input type="password" name="password" placeholder="Password" class="in"><br><br>
					<input type="tel" name="phone" placeholder="Enter Phone Number" class="in"><br><br>

					Gender:<input type="radio" name="gender" value="Male" class="in">male 
					       <input type="radio" name="gender" value="Female" class="in">female<br><br>	

					<label for="birthday">Date Of Birth:</label>
	                <input type="date" id="birthday" name="birthday" class="in"><br><br>  

	                <input type="submit" name="submit" value="SUBMIT" class="sub">     <a style="padding: 0 0 0 10px" href="log.php">Already Registerd?</a>  
				</form>

<?php

//insert Code
if(isset($_POST['submit'])){
		

		  $fullname     =$_POST['fullname'];
	    $username     =$_POST['username'];
	    $email        =$_POST['email'];
	    $password     =$_POST['password'];
	    $phone        =$_POST['phone'];
	    $gender       =$_POST['gender'];
      $birthday     =$_POST['birthday'];
		
	    
	    
	    	$query= "INSERT into registration (fullname,username,email,password,phone,gender,dob) values ('$fullname','$username','$email','$password','$phone','$gender','$birthday')" ;

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo "Registration Successful!";
	    	}
        
}



?>

			</div>
		</section>
		
	</body>
</html>