<?php
include("connection.php");

$rate=$_POST['ratingScale'];
$scale=$_POST['rating'];
$feed=$_POST['feedback'];



	$string1="INSERT INTO rate(rate,scale,feed) VALUES ('$rate','$scale','$feed')";
	//$string1="insert into rate(rate,scale,feed) values('$rate','$scale','$feed')";
	$result1=mysqli_query($con,$string1)or die(mysqli_error($con));
//echo "inserted sucessfully";
	

mysqli_close($con);
?>