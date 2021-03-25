
<?php

session_start();


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
							<li><a href="login.php">Gold</a></li>
							<li><?php echo "<a href= 'logout.php?logout'> Log Out </a> " ?></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<section id="showcase">
			<div class="application_head">
				
				<h3><center><h1>YOU ARE OUR OUR AUTHENTIC USER </h3></center></h1><br>
				<h5><center><h1>AND THATS WHY </h1></center></h5></br>
				<h1><center><h1>YOU WIN THE GOLD</h1></center></h1>
			</div>
			
		
			
			<img src="gold.jpg"  width="300" height="300">
		</section>	  
		<footer>
			<h5>University Student Information Collention forum Bangladesh &copy 2021</h5>
		</footer>
	</body>
</html>