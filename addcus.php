<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $first_name =$_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
	$middlename = $_REQUEST['middlename'];
	$extname = $_REQUEST['extname'];
    $phone_number = $_REQUEST['phone_number'];
	$street = $_REQUEST['street'];
	$city = $_REQUEST['city'];
    $ins_query="insert into customer_table(first_name,last_name,middlename,extname,phone_number,street,city) values
    ('$first_name','$last_name','$middlename','$extname','$phone_number','$street','$city')";
    mysqli_query($con,$ins_query);
    $status = "New customer added Successfully.
    </br></br><a href='viewcus.php'>View Customer</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<center><title>Add New Customer</title></center>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="profile.php"><i class="fa fa-sign-out"></i>Profile</a>
  <a href="viewcus.php"><i class="fa fa-address-card-o"></i>View Customer</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="main">
<br/><br/><br/><br/><div class="form">
<div>
<center>
<h2><font face="Britannic Bold">Add New Customer</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" class="form-control" name="first_name" placeholder="Enter first_name" required /></p>
<p><input type="text" class="form-control" name="last_name" placeholder="Enter last_name" required /></p>
<p><input type="text" class="form-control" name="middlename" placeholder="Enter middlename" required /></p>
<p><input type="text" class="form-control" name="extname" placeholder="Enter extname" required /></p>
<p><input type="number" class="form-control" name="phone_number" placeholder="Enter phone_number" required /></p>
<p><input type="text" class="form-control" name="street" placeholder="Enter street" required /></p>
<p><input type="text" class="form-control" name="city" placeholder="Enter city" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>

</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</center>
</div>
</div>
</div>
</body>
</html>