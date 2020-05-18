<?php

include('dbconnection.php');

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Customer Details</title>
		<link rel="stylesheet" type="text/css" href="css/customer.css">
	</head>

	<body>
		
	    <section>
	    	
			<div class="cust">
				<h1 style="text-align: center;">Customer Details</h1>
				<form action="" method="POST">
				

				<p style="color:red">*Required Field</p>
				
					<input type="text" name=fullName placeholder="Full Name" class="in" ><br><br>
					<input type="number" name="orderNo" placeholder="Order No" class="in" ><br><br>
					<input type="text" name="orderDetails" placeholder="Order Details" class="in"><br><br>
					<input type="tel" name="phoneNumber" placeholder="Phone Number" class="in"><br><br>
					<input type="number" name="totalBill" placeholder="Total Bill" class="in"><br><br>

					<input type="submit" name="add" value="ADD" class="btn">		
					<input type="submit" name="update" value="UPDATE" class="btn">		
					<input type="submit" name="delete" value="DELETE" class="btn">		
				    <input type="submit" name="logout" value="LOGOUT" class="btn">		
					
			    </form>




<?php

    if(isset($_POST['logout'])){

    	header("location: logout.php");

    }

	if(isset($_POST['add'])){
		

		$fullName     =$_POST['fullName'];
	    $orderNo      =$_POST['orderNo'];
	    $orderDetails =$_POST['orderDetails'];
		$phoneNumber  =$_POST['phoneNumber'];
		$totalBill	  =$_POST['totalBill'];

		if($fullName=="")
		{
			echo "Name Can't be blank";
		}
		elseif($orderNo=="")
		{
			echo "orderNo can't be blank";
		}
        elseif($orderDetails=="")
		{
			echo "orderDetails can't be blank";
		}
		elseif($phoneNumber=="")
		{
			echo "phoneNumber can't be blank";
		}
		elseif($totalBill=="")
		{
			echo "totalBill can't be blank";
		}

	    else
	    {
	    	$query= "INSERT into ordertable (custname,ordrno,ordrdetls,contactno,totalbill) values ('$fullName','$orderNo','$orderDetails','$phoneNumber','$totalBill')";

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo "inserted successfully";
	    	}

	    }

}



//update code
if(isset($_POST['update'])){
		

		$fullName     =$_POST['fullName'];
	    $orderNo      =$_POST['orderNo'];
	    $orderDetails =$_POST['orderDetails'];
		$phoneNumber  =$_POST['phoneNumber'];
		$totalBill	  =$_POST['totalBill'];

		if($fullName=="")
		{
			echo "Name Can't be blank";
		}
		elseif($orderNo=="")
		{
			echo "orderNo can't be blank";
		}
        elseif($orderDetails=="")
		{
			echo "orderDetails can't be blank";
		}
		elseif($phoneNumber=="")
		{
			echo "phoneNumber can't be blank";
		}
		elseif($totalBill=="")
		{
			echo "totalBill can't be blank";
		}

	    else
	    {
	    	$query= "UPDATE ordertable SET custname='$fullName', ordrdetls= '$orderDetails', contactno='$phoneNumber',totalbill='$totalBill' WHERE ordrno ='$orderNo' ";

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo "updated successfully";
	    	}

	    }

}


///delete code
if(isset($_POST['delete'])){
		

		
	    $orderNo = $_POST['orderNo'];
	   

		
		if($orderNo=="")
		{
			echo "orderNo can't be blank";
		}
    
	    else
	    {
	    	$query= "DELETE FROM ordertable WHERE ordrno='$orderNo'  ";

	    	$row=mysqli_query($con,$query);
	    	if($row)
	    	{
	    		echo  "deleted successfully";
	    	}

	    }

}   


    
     
?>


</div>
		<div style="background-color: #78b5e0;color:black ;width: 520px;margin: auto;">
     	<center>
     		<h2 style="padding: 20px">Records in the table</h2>
     		
     	<table>
     		<tr style="background-color: #6A5ACD;color: white;">
     			<th style="padding: 15px 20px;">Full Name</th>
     			<th style="padding: 15px 20px;">Order NO</th>
     			<th style="padding: 15px 20px;">Order Details</th>
     			<th style="padding: 15px 20px;">Phone Number</th>
     			<th style="padding: 15px 20px;">Total Bill</th>
     		</tr>
     		<?php
                
                $query="SELECT * FROM ordertable"; 
                $result=mysqli_query($con,$query);

                while ($row=mysqli_fetch_assoc($result)) {

                	$fullName=$row['custname'];
                	$orderNo=$row['ordrno'];
                	$orderDetails=$row['ordrdetls'];
                	$phoneNumber=$row['contactno'];
                	$totalBill=$row['totalbill'];

                



     		?>
     		<tr style="background-color: #524c4c;color: white;">
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $fullName; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $orderNo; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $orderDetails; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $phoneNumber; ?></td>
     			<td style="padding: 15px 20px;text-align: center;"><?php echo $totalBill; ?></td>
     		</tr>

<?php }  ?> 

     	</table>
        </center>
     </div>
     </section>
    
   </body>
</html>    

			    

