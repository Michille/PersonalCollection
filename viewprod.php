<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="sidebar">
  <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="addprod.php"><i class="fa fa-address-card-o"></i>Add New Product</a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Arial Rounded MT Bold">View Product</font></h2>
</div>

<table class="table-striped" width="100%"  style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Number</strong></th>
<th><strong>product_id</strong></th>
<th><strong>particular</strong></th>
<th><strong>item_quantity</strong></th>
<th><strong>unit</strong></th>
<th><strong>regular_price</strong></th>
<th><strong>discount</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
</div>
</center>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM product_table;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["product_id"]; ?></td>
<td align="center"><?php echo $row["particular"]; ?></td>
<td align="center"><?php echo $row["item_quantity"]; ?></td>
<td align="center"><?php echo $row["unit"]; ?></td>
<td align="center"><?php echo $row["regular_price"]; ?></td>
<td align="center"><?php echo $row["discount"]; ?></td>
<td align="center">
<a href="editprod.php?id=<?php echo $row["product_id"]; ?>"><i class="fa fa-edit"></i></a>
</td>
<td align="center">
<a href="deleteprod.php?id=<?php echo $row["product_id"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
