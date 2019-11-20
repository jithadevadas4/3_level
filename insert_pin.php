<?php
include("connection.php");

$accno=$_POST['accno'];
$pin=$_POST['pin'];
$amount=$_POST['amount'];
$type=$_POST['type'];


	
	$string1="insert into pin_set(acc_no,pin,amt,payment_type) values('$accno','$pin','$amount','$type')";
	$result1=mysqli_query($con,$string1)or die(mysqli_error($con));
echo "inserted sucessfully";
	

mysqli_close($con);
?>