<?php
include("connection.php");
//$con=mysqli_connect("localhost","root","","atm_security");
$old=$_POST['old'];
$new=$_POST['new'];
$acc=$_POST['accno'];


	
	$string1="UPDATE registartion set pin='$new' WHERE account_no='$acc'";
	$result1=mysqli_query($con,$string1)or die(mysqli_error($con));
echo "inserted sucessfully";
	

mysqli_close($con);
?>