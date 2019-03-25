<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from product_table where product_id='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$product_id =$_POST['product_id'];
		$particular =$_POST['particular'];
		$item_quantity=$_POST['item_quantity'];
		$unit =$_POST['unit'];
		$regular_price =$_POST['regular_price'];
		$discount =$_POST['discount'];
		$update="
		UPDATE product_table 
		SET 
			product_id='".$product_id."', 
			particular='".$particular."', 
			item_quantity='".$item_quantity."', 
			unit='".$unit."',
			regular_price='".$regular_price."', 
			discount='".$discount."'
		where
			product_id=".$id;
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewprod.php' : window.location.href='viewprod.php';
				</script>
			";
			
			
		}
		
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Update Record</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="sidebar">
		<a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="Viewcus.php"><i class="fa fa-address-card-o"></i>Customer</a>
		<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Products</a>
		<a href="viewcoll.php"><i class="fa fa-address-card-o"></i>Collection</a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>

	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
			<p><input type="number" class="form-control" name="product_id" placeholder="Enter product_id"
			required value="<?php echo $row['product_id'];?>" /></p>
			<p><input type="text" class="form-control" name="particular" placeholder="Enter particular"
			required value="<?php echo $row['particular'];?>" /></p>
			<p><input type="text" class="form-control" name="item_quantity" placeholder="Enter item_quantity" 
			required value="<?php echo $row['item_quantity'];?>" /></p>
			<label> Unit: </label>
					<select input type="text" name="unit"  style = "width:200px; height:50px;" class="form-control" placeholder="unit" required  >
						<option placeholder=""></option>
						<option placeholder="">pack</option>
						<option placeholder="">kl</option>
						<option placeholder="">dozen</option>
						<option placeholder="">grams</option>
						<option placeholder="">liters</option>
						<option placeholder="">pcs.</option>
						<option placeholder="">set</option>
					</select><br/>
			<p><input type="text" class="form-control" name="regular_price" placeholder="Enter regular_price" 
			required value="<?php echo $row['regular_price'];?>" /></p>
			<p><input type="text" class="form-control" name="discount" placeholder="Enter discount" 
			required value="<?php echo $row['discount'];?>" /></p>
			<p><input name="update_record" class="form-control" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>