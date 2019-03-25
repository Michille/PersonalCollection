<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$product_id =$_REQUEST['product_id'];
    $particular =$_REQUEST['particular'];
    $item_quantity = $_REQUEST['item_quantity'];
	$unit = $_REQUEST['unit'];
	$regular_price = $_REQUEST['regular_price'];
	$discount = $_REQUEST['discount'];
    $ins_query="insert into product_table(product_id,particular,item_quantity,unit,regular_price,discount) values
    ('$product_id','$particular','$item_quantity','$unit','$regular_price','$discount')";
    mysqli_query($con,$ins_query);
    $status = "New Product added Successfully.
    </br></br><a href='viewprod.php'>View Product</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<center><title>Add New Product</title></center>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="viewprod.php"><i class="fa fa-address-card-o"></i>View Product</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="main">
<div class="form">
<div>
<center><h2><font face="Britannic Bold">Add New Product</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<label>Product ID</label>
<input type="text" class="form-control" name="product_id" placeholder="Enter product_id" required />
<label>Particular</label>
<input type="text" class="form-control" name="particular" placeholder="Enter particular" required />
<label>Item Quantity</label>
<input type="text" class="form-control" name="item_quantity" placeholder="Enter item_quantity" required />
<label>Unit</label>
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
<label>Regular Price</label>
<input type="text" class="form-control" name="regular_price" placeholder="Enter regular_price" required />
<label>Discount</label>
<input type="text" class="form-control" name="discount" placeholder="Enter discount" required /><br>
<input name="submit" type="submit" value="Submit" />
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</center>
</div>
</div>
</div>
</body>
</html>