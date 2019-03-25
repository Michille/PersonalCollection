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
		<div class="sidebar">
		   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		   	<a href="additems.php"><i class="fa fa-address-card-o"></i>Add new Items </a>
			<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="viewcus.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
		<center><div class="main w-75">
		<br/><br/>
		<div class="form">
				<h2><font face="Britannic Bold">Items List</font></h2>
		</div>

		<table class="table-striped" width="100%"  style="border-collapse:collapse;">	
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
