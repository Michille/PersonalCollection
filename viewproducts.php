<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Products</title>
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
<<<<<<< HEAD
               Home 
=======
               Home /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="about.php" >
<<<<<<< HEAD
               About us
=======
               About us /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcustomer.php" >
<<<<<<< HEAD
              Customer
=======
              Customer /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addproducts.php" >
<<<<<<< HEAD
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
=======
               Product /
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewcollection.php" >
               Collection /
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="salesproduct.php" >
               Sales /
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout /
>>>>>>> Last Commit
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav>
	<br/><br/><br/><br/>
	<a href="Viewcustomer.php" class="btn btn-info" role="button">Back Add Products</a>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
		<div class="main">
<<<<<<< HEAD
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Product List</font></h2>
</div>

<table class="table-striped" width="100%"  style="border-collapse:collapse;">
<thead>
<th><strong>Number</strong></th>
<th><strong>Product_ID</strong></th>
<th><strong>Particular</strong></th>
<th><strong>Unit</strong></th>
<th><strong>Regular_Price</strong></th>
<th><strong>Discount</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
=======
<center>
<div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Product List</font></h2>
</div>
<div class="column" style="; margin-left:20px;"> 
<table width="110%" border="10" style="; background-color:white;">
	<thead>
		<th><strong>Number</strong></th>
		<th><strong>Product_ID</strong></th>
		<th><strong>Particular</strong></th>
		<th><strong>Unit</strong></th>
		<th><strong>Regular_Price</strong></th>
		<th><strong>Discount</strong></th>
		<th><strong>Edit</strong></th>
		<th><strong>Delete</strong></th>
</tr>
	</thead>
>>>>>>> Last Commit
</div>
</center>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM product_table";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<<<<<<< HEAD
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Product_ID"]; ?></td>
<td align="center"><?php echo $row["Particular"]; ?></td>
<td align="center"><?php echo $row["Unit"]; ?></td>
<td align="center"><?php echo $row["Regular_Price"]; ?></td>
<td align="center"><?php echo $row["Discount"]; ?></td>
<td align="center">
<a href="editproducts.php?id=<?php echo $row["Product_ID"]; ?>"><i class="fa fa-edit"></i></a>
=======
<tr>
	<td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["Product_ID"]; ?></td>
	<td align="center"><?php echo $row["Particular"]; ?></td>
	<td align="center"><?php echo $row["Unit"]; ?></td>
	<td align="center"><?php echo $row["Regular_Price"]; ?></td>
	<td align="center"><?php echo $row["Discount"]; ?></td>
	<td align="center">
	<a href="editproducts.php?id=<?php echo $row["Product_ID"]; ?>"><i class="fa fa-edit"></i></a>
>>>>>>> Last Commit
</td>
<td align="center">
<a href="deleteproducts.php?id=<?php echo $row["Product_ID"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
