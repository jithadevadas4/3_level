<?php
include("connection.php");
//$con=mysqli_connect("localhost","root","","atm_security");
//read values 
$name1=$_POST['name'];//name from android studio
$email=$_POST['email'];
$pin=$_POST['pin'];
$phone=$_POST['mobile'];
$terminate=$_POST['terminate'];

$address = $_POST['address'];
$dob = $_POST['dob'];
$accno = $_POST['accno'];

$c="SELECT account_no FROM registartion";
$table=mysqli_query($con,$c);
while($row=mysqli_fetch_array($table))
{
	if($row['account_no']==$accno)
		$flag =1;
}

if($flag != 1)
{

	$res= "INSERT INTO registartion(name, address, email_id, phone_no, dob, account_no, pin, terminateset) VALUES ('$name1','$address','$email','$phone','$dob','$accno','$pin','$terminate')";

	//$res="insert into user(name,email,password,mobile,terminateset)values('$name1','$email','$password','$phone','$terminate')";

	//check status
	if(mysqli_query($con,$res))
	{
		$user['status']['success']="true";
		echo json_encode($user);
	}

	else
	{
		$user['status']['success']="false";
		echo json_encode($user);
	}
}
else{
	echo "Account Number already registered";
}
mysqli_close($con);

?>