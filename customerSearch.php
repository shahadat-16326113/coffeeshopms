<?php
                

$con=mysqli_connect("localhost","root","","coffeeshop");
$output='';

$s=$_GET['usearch'];

$query="SELECT * FROM ordertable where custname like '%$s%' "; 

$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
	$output .= '<div style="margin:auto;text-align:center;padding:100px;width:460px;">
					<table>
					<tr style="background-color: #6A5ACD;color: white;">
						<th style="padding: 15px 20px;">Customer Name</th>
						<th style="padding: 15px 20px;">Order NO</th>
						<th style="padding: 15px 20px;">Order Details</th>
						<th style="padding: 15px 20px;">Contact NO</th>
						<th style="padding: 15px 20px;">Total Bill</th>

                    </tr>';

		while ($row = mysqli_fetch_array($result)){
		                
              $output .= '
                 <tr style="background-color: #524c4c;color: white;">
			         <td style="padding: 15px 20px;text-align: center;">'.$row['custname'].'</td>
			         <td style="padding: 15px 20px;text-align: center;">'.$row['ordrno'].'</td>
			         <td style="padding: 15px 20px;text-align: center;">'.$row['ordrdetls'].'</td>
			         <td style="padding: 15px 20px;text-align: center;">'.$row['contactno'].'</td>
			         <td style="padding: 15px 20px;text-align: center;">'.$row['totalbill'].'</td>
			     </tr> 
			   ';     
	    }

		echo $output;



}

else
{
	echo "data not found";
}


?>