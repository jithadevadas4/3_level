<?php
$con=mysqli_connect("localhost","root","","atm_security");


$accno=$_POST['accno'];

$type=$_POST['type'];



   $res=mysqli_query($con,"select * from pin_set where acc_no='$accno' and payment_type='$type'");
	
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_array($res))
		{
			$result[]=$row;
		}
		
	echo json_encode($result);
}
	else{
	echo "failed";
	}

mysqli_close($con);
?>