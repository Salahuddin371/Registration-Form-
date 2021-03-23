<?php
	$localhost ="localhost";
	$username = "root";
	$password = "";
	$dbname = "registration1";
	$con=mysqli_connect($localhost,$username,$password,$dbname);
	if($con)
	{echo "connection ok";}
	
?>