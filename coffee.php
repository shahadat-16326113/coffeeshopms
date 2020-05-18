<?php

include('dbconnection.php');

?>





<!DOCTYPE html>
<html>
	<head>
		<title>Coffee Details</title>
		<link rel="stylesheet" type="text/css" href="css/coffee.css">
	</head>

	<body >
		<div class="coff">
			<h1 style="text-align: center;">Coffee Details</h1>
			<form action="" method="POST">
				<input type="number" name="coffId" placeholder="Coffee Id" class="in"><br><br>		
				<input type="text" name="coffName" placeholder="Coffee Name" class="in"><br><br>		
				<input type="number" name="coffPrice" placeholder="Coffee Price" class="in"><br><br>

				<input type="submit" name="add" value="ADD" class="btn">		
				<input type="submit" name="update" value="UPDATE" class="btn">		
				<input type="submit" name="delete" value="DELETE" class="btn">		
				<input type="submit" name="logout" value="LOGOUT" class="btn">		
			</form>

<?php

if(isset($_POST['logout'])){

    	header("location: logout.php");

}

//insert Code
if(isset($_POST['add'])){
		

		$coffId     =$_POST['coffId'];
	    $coffName   =$_POST['coffName'];
	    $coffPrice  =$_POST['coffPrice'];
		

		if($coffId=="")
		{
			echo "coffId Can't be blank";
		}
		elseif($coffName=="")
		{
			echo "coffName can't be blank";
		}
        elseif($coffPrice=="")
		{
			echo "coffPrice can't be blank";
		}
		
	    else
	    {
	    	$query= "INSERT into coffee (coffid,coffname,coffprice) values ('$coffId','$coffName','$coffPrice')" ;

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo "inserted successfully";
	    	}

	    }

}


///update code
if(isset($_POST['update'])){
		

		$coffId     =$_POST['coffId'];
	    $coffName   =$_POST['coffName'];
	    $coffPrice  =$_POST['coffPrice'];
		

		if($coffId=="")
		{
			echo "coffId Can't be blank";
		}
		elseif($coffName=="")
		{
			echo "coffName can't be blank";
		}
        elseif($coffPrice=="")
		{
			echo "coffPrice can't be blank";
		}
		
	    else
	    {
	    	$query= "UPDATE coffee SET coffname='$coffName', coffprice='$coffPrice' WHERE coffid='$coffId' " ;

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo "updated successfully";
	    	}

	    }

}


///delete code
if(isset($_POST['delete'])){
		

		
	    $coffId = $_POST['coffId'];
	   

		
		if($coffId=="")
		{
			echo "coffId can't be blank";
		}
    
	    else
	    {
	    	$query= "DELETE FROM coffee WHERE coffid='$coffId'  ";

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo  "deleted successfully";
	    	}

	    }

}   









?>			

			
</div>
      
      <div style="background-color: #78b5e0;color:black ;width: 400px;margin: auto;">
     	<center>
     		<h2 style="padding: 20px">Records in the table</h2>
     		
     	<table>
     		<tr style="background-color: #6A5ACD;color: white;">
     			<th style="padding: 15px 20px;">Coffee Id</th>
     			<th style="padding: 15px 20px;">Coffee Name</th>
     			<th style="padding: 15px 20px;">Coffee Price</th>
     			
     		</tr>
     		<?php
                
                $query="SELECT * FROM coffee"; 
                $result=mysqli_query($con,$query);

                while ($row=mysqli_fetch_assoc($result)) {

                	$coffId      =$row['coffid'];
                	$coffName    =$row['coffname'];
                	$coffPrice   =$row['coffprice'];
                	

            ?>
     		<tr style="background-color: #524c4c;color: white;">
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $coffId; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $coffName; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $coffPrice; ?></td>
     			
     		</tr>

<?php }  ?> 

     	</table>
        </center>
        <br><br>
     </div>

	</body>
</html>