<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<a href="register.php" class="button">Register</a>
<a href="login.php" class="button">Login</a>
<div id="h1">Registration Form</div>
<div class="loginbox">
<form action="" method="POST">
Username: <input type="text" name="user"><br /><br/>
Password: <input type="password" name="pass"><br />	
<input type="submit" value="Register" name="submit" id="button" />
</form>
</div>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('test1') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>