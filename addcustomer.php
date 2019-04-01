<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $Firstname =$_REQUEST['Firstname'];
    $Lastname = $_REQUEST['Lastname'];
	$Middlename = $_REQUEST['Middlename'];
	$Extendedname = $_REQUEST['Extendedname'];
    $Phonenumber = $_REQUEST['Phonenumber'];
	$Street = $_REQUEST['Street'];
	$City = $_REQUEST['City'];
    $ins_query="insert into customer_table(Firstname,Lastname,Middlename,Extendedname,Phonenumber,Street,City) values
    ('$Firstname','$Lastname','$Middlename','$Extendedname','$Phonenumber','$Street','$City')";
    mysqli_query($con,$ins_query);
    $status = "New customer added Successfully.
    </br></br><a href='Viewcustomer.php'>View Customer</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Customer</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-responsive">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <a class="navbar-brand" href="home.html">
			<img src="logo.jpg" style="float:left;" width="150" height="50" alt=""></a>
 	    </a>
           
            <li class="nav-item ">
              <a class="nav-link " href="home.php" >
               Home 
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="about.html" >
               About us
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcustomer.php" >
              Customer
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addproducts.php" >
               Product
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout
              </a>
            </li>
          </ul>
        </div>
		</button>
    </nav>
	<br/><br/><br/><br/>
	<a href="Viewcustomer.php" class="btn btn-info" role="button">View Customer List</a>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
		<div class="main">
		<br/>
		<div class="form">
		<div>
		<center><h2><font face="Britannic Bold">Add New Customer</font></h2>
			<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<p><input type="text" class="form-control" name="Firstname" placeholder="Enter Name" required /></p>
				<p><input type="text" class="form-control" name="Lastname" placeholder="Enter lastname" required /></p>
				<p><input type="text" class="form-control" name="Middlename" placeholder="Enter Middlename" required /></p>
				<p><input type="text" class="form-control" name="Extendedname" placeholder="Enter Extendedname" required /></p>
				<p><input type="number" class="form-control" name="Phonenumber" placeholder="Enter Phonenumber" required /></p>
				<p><input type="text" class="form-control" name="Street" placeholder="Enter Street" required /></p>
				<p><input type="text" class="form-control" name="City" placeholder="Enter City" required /></p>
				<p><input name="submit" type="submit"  value="Submit" /></p>
			</form>
		<p style="color:#FF0000;"><?php echo $status; ?></p>
		</center>
		</div>
			</div>
				</div>
	</body>
</html>