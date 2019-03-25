<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
		
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<br/><br/><br/><br/><br/><br/>
<div class="form">
<center><h1><font face="Arial Rounded MT Bold" style="font-size:5vw">Log In</font></h1></center>
<center><form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br/><br/>
<input type="password" name="password" placeholder="Password" required /><br/><br/>
<input name="submit" type="submit" value="Submit" />
</center>
</form><br/>
</div>
<?php } ?>
</body>
</html>