<?php
include("connection.php");
mysql_select_db("foot_db");




   $res=mysql_query("select * from tbl_diet");

	
	if(mysql_num_rows($res)>0){
		while($row=mysql_fetch_array($res))
		{
			$result[]=$row;
		}
		
	echo json_encode($result);
}
	else{
	echo "failed";
	}

mysql_close();
?>