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
$pass="2567";
$p1=$pass[0]-1;
$p2=$pass[1]-1;
$p3=$pass[2]-1;
$p4=$pass[3]-1;

$password=$shuffled[$p1];
$password=$password.$shuffled[$p2];
$password=$password.$shuffled[$p3];
$password=$password.$shuffled[$p4];
echo $pass."<br>";
echo $password;
// This will echo something like: bfdaec
//echo $shuffled;

$j=0;
for($i=0;$i<9;$i++)
{
	$j=$j+1;
	$n="myBtn".$i;
	echo "<div class='col-xs-4'><div class='pad'><input type='button' value='$shuffled[$i]' onclick='myFunction($i)' name='a' id='$n'> <span class='right'> $j</span></div></div>";
}
?>
<!--<input type='text'   name='aa' id='myText'>-->
</form>
<p id="demo"></p>
</div>