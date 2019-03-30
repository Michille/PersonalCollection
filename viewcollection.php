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
