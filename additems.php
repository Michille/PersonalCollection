<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$code_no =$_REQUEST['code_no'];
    $product_id =$_REQUEST['product_id'];
    $quantity = $_REQUEST['quantity'];
	$unit = $_REQUEST['unit'];
	$amount = $_REQUEST['amount'];
    $ins_query="insert into collection_items(code_no,product_id,quantity,unit,amount) values
    ('$code_no','$product_id','$quantity','$unit','$amount')";
    mysqli_query($con,$ins_query);
    $status = "New ITEMS added Successfully.
    </br></br><a href='viewitems.php'>View Items</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New ITEMS</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
			<div class="sidebar">
			   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
				<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
				<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Product </a>
				<a href="viewcusphp"><i class="fa fa-address-card-o"></i>Customers </a>
				<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
			   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
	<div class="main">
	<br/><div class="form">
	<div>
	<h2><font face="Britannic Bold">Add New Items</font></h2>
			<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<p><input type="text" class="form-control" name="code_no" placeholder="Enter code_no" required /></p>
				<p><input type="text" class="form-control" name="product_id" placeholder="Enter product_id" required /></p>
				<p><input type="number" class="form-control" name="quantity" placeholder="Enter quantity" required /></p>
			<center><label>Unit</label></center>
				<select name="unit" class="form-control" value="">
				<option value="" selected></option>
				<option value="Dozen">Dozen</option>
				<option value="pack">pack</option>
				<option value="kl">kl</option>
				<option value="Grams">Grams</option>
				<option value="liters">liters</option>
				<option value="liters">set</option>
				<option value="liters">pack</option>
				<option value="liters">pcs.</option>
				</select><br>
				<p><input type="text" class="form-control" name="amount" placeholder="Enter amount" required /></p>
				<p><input name="submit" type="submit"class="form-control"  value="Submit" /></p>
			</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
</body>
</html>
