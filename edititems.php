<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from collection_items where code_no='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['code_no'];
		$product_id =$_POST['product_id'];
		$quantity =$_POST['quantity'];
		$unit =$_POST['unit'];
		$amount =$_POST['amount'];
		$update="
		UPDATE collection_items 
		SET 
			code_no='".$id."', 
			product_id='".$product_id."', 
			quantity='".$quantity."', 
			unit='".$unit."',
			amount='".$amount."'
		where
			code_no=".$id; 
		
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewitems.php' : window.location.href='viewitems.php';
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
<br/>
	<div class="sidebar">
		<a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="Viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
		<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Products</a>
		<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>

	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['code_no'];?>" />
			<label>Code_no:</label>
			<p><input type="text" class="form-control" name="code_no" placeholder="Enter code_no"
			required value="<?php echo $row['code_no'];?>" /></p>
			<label>Product_ID:</label><p><input type="text" class="form-control" name="product_id" placeholder="Enter product_id"
			required value="<?php echo $row['product_id'];?>" /></p>
			<label>Quantity:</label><p><input type="text" class="form-control" name="quantity" placeholder="Enter quantity" 
			required value="<?php echo $row['quantity'];?>" /></p>
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
			<label>Amount:</label><p><input type="text" class="form-control" name="amount" placeholder="Enter amount" 
			required value="<?php echo $row['amount'];?>" /></p>
			<p><input name="update_record" type="submit" class="form-control" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>