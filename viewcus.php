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
  <a href="addcus.php"><i class="fa fa-address-card-o"></i>Add new Customer</a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Arial Rounded MT Bold">View Customer</font></h2>
</div>

<table class="table-striped" width="100%"  style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Number.</strong></th>
<th><strong>First Name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>Middlename</strong></th>
<th><strong>Extname</strong></th>
<th><strong>Phone Number</strong></th>
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
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["middlename"]; ?></td>
<td align="center"><?php echo $row["extname"]; ?></td>
<td align="center"><?php echo $row["phone_number"]; ?></td>
<td align="center"><?php echo $row["street"]; ?></td>
<td align="center"><?php echo $row["city"]; ?></td>

<td align="center">
<a href="editcus.php?id=<?php echo $row["customer_id"]; ?>"><i class="fa fa-edit"></i></a>
</td>
<td align="center">
<a href="deletecus.php?id=<?php echo $row["customer_id"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
