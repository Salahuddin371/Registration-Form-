<?php

require("db_connection.php");


if(isset($_POST["reg"]))
	{	$name=$_POST['name'];
		$father_name=$_POST['father_name'];
		$university=$_POST['university'];
		$std_id=$_POST['std_id'];
		$email=$_POST['email'];
		$department=$_POST['department'];
		$skils=$_POST['skils'];
		
		$query=mysqli_query($con,"SELECT*FROM student_info Where email='$email'");
		
		//$result = mysqli_query($con, $query); 

		
			$row = mysqli_num_rows($query); 
			
		if($row >0)
		{echo "Email id Already Use for #".$row;}
		
		else
		{
		$q = ("INSERT into student_info(Name,father_name,email,university,std_id,department,skills)
				VALUES('$name','$father_name','$email','$university','$std_id','$department','$skils')");
				
		$result=mysqli_query($con,$q);
				 
		if($result)
		{echo "Success";}
		else
		{echo "fail";}
		
		header("location:registration.php?OK=Insert Successfully");
	
		}
	}
	else
	{echo " insertion fail";}
		

?>