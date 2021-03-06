<<<<<<< HEAD
<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Collection</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
</head>
<body>
		<div class="sidebar">
		   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
			<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="addcus.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
		<center><div class="main w-75">
		<br/><br/>
		<div class="form">
				<h2><font face="Britannic Bold">Collection List</font></h2>
		</div>
	<table class="table-striped" width="100%"  style="border-collapse:collapse;">
			<thead>
				<th><strong>Number</strong></th>
				<th><strong>Code_no</strong></th>
				<th><strong>Customer_ID</strong></th>
				<th><strong>Due_date</strong></th>
				<th><strong>Status</strong></th>
				<th><strong>Date_paid</strong></th>
				<th><strong>Interest</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
				</tr>
			</thead>
		</div>
			</center>
				<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM collection_table";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
		<tr><td align="center"><?php echo $count; ?></td>
			<td align="center"><?php echo $row["code_no"]; ?></td>
			<td align="center"><?php echo $row["customer_id"]; ?></td>
			<td align="center"><?php echo $row["due_date"]; ?></td>
			<td align="center"><?php echo $row["status"]; ?></td>
			<td align="center"><?php echo $row["date_paid"]; ?></td>
			<td align="center"><?php echo $row["interest"]; ?></td>
			<td align="center">
				<a href="editcollection.php?id=<?php echo $row["code_no"]; ?>"><i class="fa fa-edit"></i></a>
					</td>
				<td align="center">
				<a href="deletecollection.php?id=<?php echo $row["code_no"]; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
							</tr>
<?php $count++; } ?>
<div class="form">
				
		</div>
		<table class="table-striped" width="100%"  style="border-collapse:collapse;">
		<center><div class="main w-75">
		<br/><br/>
		<div class="form">
			<br/><br/><br/>
				<h2><font face="Britannic Bold">Items List</font></h2>
		</div>
			<thead>
				<th><strong>Number</strong></th>
				<th><strong>Code_no</strong></th>
				<th><strong>Product_ID</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Unit</strong></th>
				<th><strong>Amount</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
				</tr>
			</thead>
				</div>
					</center>
						<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM collection_items";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
			<tr><td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["code_no"]; ?></td>
				<td align="center"><?php echo $row["product_id"]; ?></td>
				<td align="center"><?php echo $row["quantity"]; ?></td>
				<td align="center"><?php echo $row["unit"]; ?></td>
				<td align="center"><?php echo $row["amount"]; ?></td>
				<td align="center">
			<a href="edititems.php?id=<?php echo $row["code_no"]; ?>"><i class="fa fa-edit"></i></a>
			</td>
			<td align="center">
			<a href="deleteitems.php?id=<?php echo $row["code_no"]; ?>"><i class="fa fa-trash-o"></i></a>
				</td>
					</tr>
<?php $count++; } ?>	
</tbody>
</table>
</body>
</html>
=======
<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Collection</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<style>
	{
  box-sizing: border-box;
 
}

body {
   margin:10px;
  padding:0px;
  width:100%;
  height:100%;
}

.column {
  float: left;
  width: 47.00%;
  padding: 5px;
  height: 500px;
  margin: 5px;
  
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  background-color: black;
  padding: 10px;
  text-align: center;


}
@media (max-width: 600px) {
  .column {
    width: 100%;
  }
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  border-box: box-sizing;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: inline;}
</style>
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
              <a class="nav-link " href=".about.php" >
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
<<<<<<< HEAD
              <a class="nav-link " href="addcollection.php" >
=======
              <a class="nav-link " href="viewcollection.php" >
>>>>>>> Last Commit
               Collection
              </a>
            </li>
			<li class="nav-item ">
<<<<<<< HEAD
              <a class="nav-link " href="additems.php" >
               Items
              </a>
			  <li class="nav-item ">
              <a class="nav-link " href="checkbox.php" >
               Checkbox
              </a>
=======
              <a class="nav-link " href="salesproduct.php" >
               Sales
              </a>
			
>>>>>>> Last Commit
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
<<<<<<< HEAD
	<a href="additems.php" class="btn btn-info" role="button">Add Items</a>
=======
	<a href="addcollection.php" class="btn btn-info" role="button">Add Collection</a>
>>>>>>> Last Commit
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
		<div class="form"><br/><br/>
		<center><h2><font face="Britannic Bold">Collection List & Items List</font></h2></center>
		</div>
		<br/><br/>
		<div class="column" style="; margin-left:300px;"> 
			<table width="150%" border="10" style="; background-color:white;">
				<thead>
					<th><strong>No</strong></th>
					<th><strong>Code_no</strong></th>
					<th><strong>Customer_ID</strong></th>
					<th><strong>Due_date</strong></th>
					<th><strong>Status</strong></th>
					<th><strong>Date_paid</strong></th>
					<th><strong>Interest</strong></th>
					<th><strong>Edit</strong></th>
					<th><strong>Delete</strong></th>
				</tr>
				</thead>
				<tbody>
				<?php
		$count=1;
		$sel_query="SELECT * FROM collection_table";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
		<tr><td align="center"><?php echo $count; ?></td>
			<td align="center"><?php echo $row["Code_no"]; ?></td>
			<td align="center"><?php echo $row["Customer_ID"]; ?></td>
			<td align="center"><?php echo $row["Due_date"]; ?></td>
			<td align="center"><?php echo $row["Status"]; ?></td>
			<td align="center"><?php echo $row["Date_paid"]; ?></td>
			<td align="center"><?php echo $row["Interest"]; ?></td>
			<td align="center">
				<a href="editcollection.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-edit"></i></a>
					</td>
				<td align="center">
				<a href="deletecollection.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
							</tr>
		<?php $count++; } ?>
				</tbody>
				</thead>
				</table>
		</div>
			<div class="column" style="; margin-left:300px;">
			<table width="150%" border="10" style="; background-color:white;">
				<thead>
				<th><strong>No.</strong></th>
				<th><strong>Code_no</strong></th>
				<th><strong>Product_ID</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Amount</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
				</tr>
				</thead>
				<tbody>
				<?php
		$count=1;
		$sel_query="SELECT * FROM collection_items";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
			<tr><td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["Code_no"]; ?></td>
				<td align="center"><?php echo $row["Product_ID"]; ?></td>
				<td align="center"><?php echo $row["Quantity"]; ?></td>
				<td align="center"><?php echo $row["Unit"]; ?></td>
				<td align="center"><?php echo $row["Amount"]; ?></td>
				<td align="center">
			<a href="edititems.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-edit"></i></a>
			</td>
			<td align="center">
			<a href="deleteitems.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-trash-o"></i></a>
				</td>
					</tr>
			<?php $count++; } ?>	
				</tbody>
				</thead>
				</table>
		</div>
</tbody>
</table>
</body>
</html>
>>>>>>> New update
