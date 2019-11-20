<?php

include("connection.php");


$true=0;
$result=mysqli_query($con,"SELECT * FROM registartion where account_no='$_REQUEST[accno]'  ") or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{


$phno=$row['phone_no'];

$phone_no=$_REQUEST['phno'];


	if( $phno == $phone_no )
	{
		echo "sendotp";
	}

	else{
		echo "check again ";
	}
}



?>