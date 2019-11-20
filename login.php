<?php
include("connection.php");

$accno=$_POST['accno'];
$pin=$_POST['pin'];

   $res=mysqli_query($con,"select * from registartion where account_no='$accno' and pin='$pin'");
	
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

mysqli_close();
?>