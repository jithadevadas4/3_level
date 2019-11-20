<?php
include("connection.php");

$email=$_POST['email'];
$pass=$_POST['password'];
$user=array();

$res=mysqli_query($con,"select * from  user where email='$email' and password='$pass'");
if(mysqli_num_rows($res)>0){
		$user['status']='true';
	while($row=mysqli_fetch_assoc($res)){
		$user['data'][]=$row;
	}
	$user['status']='true';
	echo json_encode($user);
	}
	else
	{
		$user['status']='false';
		echo json_encode($user);
	}
	mysqli_close($con);
	?>
