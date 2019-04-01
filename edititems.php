<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from collection_items where Code_no='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['Code_no'];
		$prod =$_POST['Product_ID'];
		$quan =$_POST['Quantity'];
		$unt =$_POST['Unit'];
		$amnt =$_POST['Amount'];
		$update="
		UPDATE collection_items 
		SET 
			Code_no='".$id."', 
			Product_ID='".$prod."', 
			Quantity='".$quan."', 
			Unit='".$unt."',
			Amount='".$amnt."'
		where
			Code_no=".$id; 
		
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
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br/><br/><br/><br/>
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
			<input name="id" type="hidden" value="<?php echo $row['Code_no'];?>" />
			<label>Code_no:</label>
			<p><input type="text" name="Code_no" placeholder="Enter Code_no"
			required value="<?php echo $row['Code_no'];?>" /></p>
			<label>Product_ID:</label><p><input type="text" name="Product_ID" placeholder="Enter Product_ID"
			required value="<?php echo $row['Product_ID'];?>" /></p>
			<label>Quantity:</label><p><input type="text" name="Quantity" placeholder="Enter Quantity" 
			required value="<?php echo $row['Quantity'];?>" /></p>
			<label>Unit:</label><p><input type="text" name="Unit" placeholder="Enter Unit" 
			required value="<?php echo $row['Unit'];?>" /></p>
			<label>Amount:</label><p><input type="text" name="Amount" placeholder="Enter Amount" 
			required value="<?php echo $row['Amount'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>