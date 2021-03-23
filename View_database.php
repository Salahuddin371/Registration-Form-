<?php

    require 'db_connection.php'; // For connetion
    $result = mysqli_query($con,"SELECT * FROM student_info"); /// Retriveing all data from database to show
    if(isset($_POST['reg']))
    {
        header("location:profile.php?go");
    }


?>

<!-- View page HTML -->

<!DOCTYPE html>
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
							<li class="current"><a href="Registration.php">Registration</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		
		<section id="showcase">
			<div class="application_head">
				<h1><center><h1>Information Table </h1></center></h1>
			</div>
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
       <div class="application_form">
		<table align="center" class="login">
            <tr align="center">
                <td><h3>ID</h3></td>
                <td><h3>Full Name</h3></td>
                <td><h3>Email</h3></td>
                <td><h3>Action</h3></td>
				
            </tr>
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tr align="center">
                <td><?php echo $row["std_id"]; ?></td>
                <td><?php echo $row["father_name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><input type="submit" name="reg" value="Profile"> </td>
            </tr>
            <?php
                $i++;
                }
            ?>
        </table>
		</div>
        <?php
        }
            else{
                echo "No result found";
            }
        ?>
		
		</section>
		
		<footer>
			<h5>University Student Information Collention forum Bangladesh &copy 2021</h5>
		</footer>
    </body>
</html>