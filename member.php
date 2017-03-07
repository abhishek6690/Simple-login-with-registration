<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <p><a href="logout.php" class="button">Log out</a></h2></p>
<h3>This is my first PHP program and it WORKS!!!!
</h3>
</body>
</html>
<?php
}
?>


