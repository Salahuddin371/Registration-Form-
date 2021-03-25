<?php
require "connection.php";
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $q = "select * from student_info where id ='$id'";
    $result = mysqli_query($conn , $q);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			print_r($row);
		}
		
	}
	else
	{
		echo "Problem";
	}

}
?>

<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
	<div class="container">
			<div class="row">
				<h1>Profile View</h1>
			</div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
			
			<div class="row">
				<div class="col-25">
					<label for="fname">Full Name</label>
				</div>
				<div class="col-75">
					<p><?php  echo $row['name']; ?></p>
				</div>
			</div>
			
            <?php } ?>
			
			
		
	</div>
    <?php } ?>
</body>
</html>