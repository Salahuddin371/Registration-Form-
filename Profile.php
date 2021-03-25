<?php
require "db_connection.php";
if(isset($_GET['std_id']))
{
    $std_id = $_GET['std_id'];
    $q = "select * from student_info where std_id ='$std_id'";
    $result = mysqli_query($con , $q);
	


}
else

{echo "not found";}
?>

<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	
	<header>
			<div class="container">
				<div id="branding">
					<h1><a href="#"><span class="highlight">University</span> Student Information</a></h1>
					<nav>
						<ul>
							<li><a href="#">Home</a></li>
						
							<li><a href="View_database.php">View Database</a></li>
							<li class="current"><a href="Registration.php">Registration</a></li>
							<li><a href="login.php">Gold</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		
		<section id="showcase">
			<div class="application_head">
				<h1><center><h1>Personal Information </h1></center></h1>
			</div>
			
			<div class="container">
			
				<?php 
					if(mysqli_num_rows($result) > 0){
					
						while($row = mysqli_fetch_array($result)){
						
		
				?>
				
				
						<table align="center" class="login">
							<tr>
								<td>   <img src=" <?php echo $row['Photo'];  ?> " width="100" height="100"> </td>
							</tr>
							<tr><td><label>Name:</label></td><td><?php  echo $row['Name']; ?></td><tr>
							<tr><td><label>Father Name:</label></td><td><?php  echo $row['father_name']; ?></td><tr>
							<tr><td><label>University:</label></td><td><?php  echo $row['university']; ?></td><tr>
							<tr><td><label>Student id:</label></td><td><?php  echo $row['std_id']; ?></td><tr>
							<tr><td><label>Email:</label></td><td><?php  echo $row['email']; ?></td><tr>
							<tr><td><label>Department:</label></td><td><?php  echo $row['department']; ?></td><tr>
							<tr><td><label>Skills:</label></td><td><?php  echo $row['skills']; ?></td><tr>
							
						</table>
				
				
				
				<?php 
				}
				
				
				}

				?>
				
			
		
			</div>
			
			
			
			
	
		</section>
		
		<footer>
			<h5>University Student Information Collention forum Bangladesh &copy 2021</h5>
		</footer>
    </body>
</html>