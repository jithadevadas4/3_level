<?php

include("connection.php");

$accno=$_REQUEST['accno'];
//$accno="1122334455667788";
$sql = "SELECT sum(amount) as debit FROM trascation where account='$accno' and payment_type='debit'";
$result = mysqli_query($con,$sql);


  
    while($row = mysqli_fetch_array($result)) {
		$debit=$row['debit'];
	}

$sql = "SELECT sum(amount) as credit FROM trascation where account='$accno' and payment_type='credit'";
$result = mysqli_query($con,$sql);


  
    while($row = mysqli_fetch_array($result)) {
		$credit=$row['credit'];
	}


$bal=$credit-$debit;




echo $bal;