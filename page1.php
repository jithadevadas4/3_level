  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<style>
.col-sm-4
{

}
.pad
{
border:1px solid #CCC;	
margin-bottom:10px;	
padding:10px;
}
.right
{
float:right;	
}
</style>

<script>
function myFunction(i) {
	var y=i;
	//alert(y);
    var x = document.getElementById("demo").innerHTML+document.getElementById("myBtn"+i).value;
	document.getElementById("myText").value = x;
    document.getElementById("demo").innerHTML = x;
	if(x.length==4)
		window.location="https://www.google.co.in?q="+x;
}
</script>


<div class="container">
<form action="" method="get">

<?php
$str = '123456789';
$shuffled = str_shuffle($str);
echo "<br><br><br><br>";

// This will echo something like: bfdaec
//echo $shuffled;

$j=10;
for($i=1;$i<=9;$i++)
{
	$j=$j-1;
	$n="myBtn".$i;
	echo "<div class='col-xs-4'><div class='pad'><input type='button' value='$i' onclick='myFunction($i)' name='a' id='$n'> <span class='right'> </span></div></div>";
}
?>
<!--<input type='text'   name='aa' id='myText'>-->
</form>
<p id="demo"></p>
</div>