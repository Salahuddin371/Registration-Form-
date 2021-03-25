

<?php 



session_start();

if(isset($_GET["logout"]))
{echo "logout hocce";

session_destroy();
header("location:login.php");

}

?>