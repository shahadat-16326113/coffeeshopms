<?php

include('dbconnection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee window</title>
	<link rel="stylesheet" type="text/css" href="emp.css">

</head>
<body>
	<h3>Employee Details</h3>
	<div class="contaner">
		<div class="emp-win" >

		<form action="" method="POST" >
			<table>
				<tr>
					<td>Employee Name:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Employee Id:</td>
					<td><input type="number" name="empid"></td>
				</tr>
				<tr>
					<td>Employee Designation:</td>
					<td><input type="text" name="empdesignation"></td>
				</tr>
				<tr>
					<td>Employee Salary:</td>
					<td><input type="number" name="empsalary"></td>
				</tr>
				<tr>
					<td>Employee Phone Number:</td>
					<td><input type="number" name="empnumber"></td>
				</tr>
				<tr>
					<td>Employee Address:</td>
					<td><input type="text" name="empaddress"></td>
				</tr>
				<tr>
					<td>Employee NID:</td>
					<td><input type="number" name="empnid"></td>
				</tr>
			</table>

			<input type="submit" name="insert" value="Insert" class="btn">&nbsp &nbsp &nbsp 
			<input type="submit" name="delete" value="Delete" class="btn">&nbsp &nbsp &nbsp
			<input type="submit" name="update" value="Update" class="btn">&nbsp &nbsp &nbsp
			<input type="submit" name="logout" value="Logout" class="btn">&nbsp &nbsp &nbsp
			
			
		</form>

		
	

<?php

//logout code
if(isset($_POST['logout'])){

    	header("location: logout.php");

}





//insert Code
if(isset($_POST['insert'])){
		

	    $empid             =$_POST['empid'];
	    $name              =$_POST['name'];
	    $empdesignation    =$_POST['empdesignation'];
	    $empsalary         =$_POST['empsalary'];
	    $empnumber         =$_POST['empnumber'];
	    $empaddress        =$_POST['empaddress'];
        $empnid            =$_POST['empnid'];



        if($name=="")
        {  
          echo "Name can't be blank";  
         
          
        }  
        else if($empid=="")
        {  
          echo "employee Id can't be blank";  
           
        }
      
        else if($empdesignation=="")
        {
          echo "Designation can't be blank";  
          

        }
        
        else if($empsalary=="")
        {
          echo "Employee Salary can't be blank";  
          

        }
        else if($empnumber=="")
        {
          echo "phoneNumber can't be blank";  
          

        } 
        
        else if($empaddress=="")
        {
          echo "Address can't be blank";  
         

        }
        
        else if($empnid=="")
        {
          echo "NID can't be blank";  
         

        }
        
		else{
	    
	    
	    	$query= "INSERT into employee (empid,empname,empdesi,empsal,empphn,empadd,empnid) values ('$empid','$name','$empdesignation','$empsalary','$empnumber','$empaddress','$empnid') " ;

	    	$row=mysqli_query($con,$query);

	    	if($row)
	    	{
	    		echo "Inserted";
	    	}
        }


}




///update Code
if(isset($_POST['update'])){
		

	    $empid             =$_POST['empid'];
	    $name              =$_POST['name'];
	    $empdesignation    =$_POST['empdesignation'];
	    $empsalary         =$_POST['empsalary'];
	    $empnumber         =$_POST['empnumber'];
	    $empaddress        =$_POST['empaddress'];
        $empnid            =$_POST['empnid'];
		



        if($name=="")
        {  
          echo "Name can't be blank";  
         
          
        }  
        else if($empid=="")
        {  
          echo "employee Id can't be blank";  
           
        }
      
        else if($empdesignation=="")
        {
          echo "Designation can't be blank";  
          

        }
        
        else if($empsalary=="")
        {
          echo "Employee Salary can't be blank";  
          

        }
        else if($empnumber=="")
        {
          echo "phoneNumber can't be blank";  
          

        } 
        
        else if($empaddress=="")
        {
          echo "Address can't be blank";  
         

        }
        
        else if($empnid=="")
        {
          echo "NID can't be blank";  
         

        }
	    
	    else{
	    
	    	$query= "UPDATE employee SET empname='$name', empdesi= '$empdesignation', empsal='$empsalary',empphn='$empnumber',empadd='$empaddress',empnid='$empnid' WHERE empid ='$empid' " ;

	    	$row=mysqli_query($con,$query);

	    	if($row)
	    	{
	    		echo "updated";
	    	}
	    }
        
}




///delete code 
if(isset($_POST['delete'])){

		  
          $empid = $_POST['empid'];

	      if($empid=="")
	      {  
	          echo "employee Id can't be blank";  
	           
	      }

          else
          {

		      $query= "DELETE FROM employee WHERE empid='$empid'  ";

			  $row=mysqli_query($con,$query);

				  if($row)
				  {
				    		echo  "deleted";
				  }
             
         
          }
     

} 


?>

       </div>
	

</div>


      <div style= "width: 400px;margin: auto;">
     	<center>

     	<table style="color: white;">
     		<tr style="text-align: center; color: yellow">
     			<th style="padding: 15px 20px;">Emp Id</th>
     			<th style="padding: 15px 20px;">Name</th>
     			<th style="padding: 15px 20px;">Designation</th>
     			<th style="padding: 15px 20px;">Salary</th>
     			<th style="padding: 15px 20px;">Emp phone</th>
     			<th style="padding: 15px 20px;">Emp add</th>
     			<th style="padding: 15px 20px;">Emp nid</th>
     		</tr>
     		<?php
                
                $query="SELECT * FROM employee"; 
                $result=mysqli_query($con,$query);

                while ($row=mysqli_fetch_assoc($result)) {

                	$empid=$row['empid'];
                	$empname=$row['empname'];
                	$empdesi=$row['empdesi'];
                	$empsal=$row['empsal'];
                	$empphn=$row['empphn'];
                	$empadd=$row['empadd'];
                	$empnid=$row['empnid'];

                



     		?>
     		<tr >
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empid; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empname; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empdesi; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empsal; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empphn; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empadd; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $empnid; ?></td>
     		</tr>

<?php }  ?> 

     	</table>
        </center>
     </div>
 </body>
</html>