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
							<li><a href="#">About Us</a></li>
							
							<li class="current"><a href="Registration.php">Registration</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<section id="showcase">
			<div class="application_head">
				<h1><center><h1>Registration Form</h1></center></h1>
			</div>
			<div class="application_form">
				<form method="post" action="insert_int_db.php">
					<table align="center" class="login">
			
							<tr><td><label>Name:</label></td><td><input type="text" name="name" ></td><tr>
							
							<tr><td><label>Father Name:</label></td><td><input type="text" name="father_name" ></td><tr>
							<tr><td><label>university:</label></td><td><input type="text" name="university" ></td><tr>
							<tr><td><label>std_id:</label></td><td><input type="text" name="std_id" ></td><tr>
							<tr><td><label>E-mail:</label></td><td><input type="email" name="email" ></td></tr>
							
							<tr><td><label>Department:</label></td><td><select name="department">
																			<option>CSE</option>
																			<option>EEE</option>
																			<option>ME</option>
																			<option>CE</option>
																			<option>TE</option>
																			<option>Arch</option>
																			<option>CFE</option>
																		</select>
																	</td>
																</tr>
							
							<tr><td><label>Skils:</label></td><td><input type="text" name="skils" ></td><tr>
							<tr><td><label>Photo</label></td><td><input type="file" name="photo" ></td></tr>
							<tr><td></td><td ><input class="submit" type="submit" name="reg" value="Registration"></td></tr>
					</table>	
				</form>
			</div>
			
			
			
		</section>	  
		<footer>
			<h5>University Student Information Collention forum Bangladesh &copy 2021</h5>
		</footer>
	</body>
</html>