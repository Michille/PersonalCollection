<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Customer</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
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
              <a class="nav-link " href="about.php" >
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
              <a class="nav-link " href="addcollection.php" >
               Collection
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="additems.php" >
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
	<a href="addcustomer.php" class="btn btn-info" role="button">Back to Add Customer</a>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Customers List</font></h2>
</div>
<table class="table-striped" width="100%"  style="border-collapse:collapse;">
<thead>
<th ><strong >Customer_Id</strong></th>
<th><strong>Firstname</strong></th>
<th><strong>Lastname</strong></th>
<th><strong>Middlename</strong></th>
<th><strong>Extendedname</strong></th>
<th><strong>Phonenumber</strong></th>
<th><strong>Street</strong></th>
<th><strong>City</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
</div>
</center>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM customer_table;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["Customer_ID"]; ?></td>
<td align="center"><?php echo $row["Firstname"]; ?></td>
<td align="center"><?php echo $row["Lastname"]; ?></td>
<td align="center"><?php echo $row["Middlename"]; ?></td>
<td align="center"><?php echo $row["Extendedname"]; ?></td>
<td align="center"><?php echo $row["Phonenumber"]; ?></td>
<td align="center"><?php echo $row["Street"]; ?></td>
<td align="center"><?php echo $row["City"]; ?></td>

<td align="center">
<a href="editcustomer.php?id=<?php echo $row["Customer_ID"]; ?>"><i class="fa fa-edit"></i></a>
</td>
<td align="center">
<a href="deletecustomer.php?id=<?php echo $row["Customer_ID"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
