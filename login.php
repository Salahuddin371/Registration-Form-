<?php
require "db_connection.php";
session_start();
if(isset($_POST['log']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(empty($email)||empty($password))
	{
		header("location:login.php?blank=Fill blank Space");
	}
	else
	{
		$q="SELECT * FROM student_info WHERE email='$email' AND password='$password'";
		$result=mysqli_query($con,$q);
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['email']=$email;
			header("location:gold.php");
		}
		else
		{
			header("location:login.php?Invalid=Enter Correct E-mail And Password");
		}
	}
}
?>
<html>
	<head>
		<meta name="viewport" content="width=device=width">
			<title>University Student Information | Welcome</title>
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
							
							<li class="registration.php"><a href="Registration.php">Registration</a></li>
							<li><a href="login.php">GOLD</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<section id="showcase">
			<div class="container">
			
				<h1><center>If you are not registered.. please register  <a href="registration.php">here...</a> </center></h1> 
			    <h1><center>Log In for get GOLD </center></h1>  
			   
			</div>
		</section>
		<div class="form">
			<table align="center" border="0">
				<tr><td>
				<?php
					if(@$_GET['blank']==true)
					{
						?>
						<div><?php echo $_GET['blank'];?></div>
						<?php	
					}
				?>
				<?php
					if(@$_GET['Invalid']==true)
					{
						?>
						<div><?php echo $_GET['Invalid'];?></div>
						<?php	
					}
				?>
					<form method="post">
						<tr><td><label>E-mail:</label></td><td><input type="email" name="email"></td></tr>	
						<tr><td><label>Password:</label></td><td><input type="password" name="password"></td></tr>		
						<tr><td></td><center><td><input class="submit" type="submit" name="log" value="login"></td></center></tr>
					</form>
				</td></tr>
			</table>
		</div>
		<footer>
			<h5>Smart Health consultancy forum Bangladesh &copy 2018</h5>
		</footer>
	</body>

</html>