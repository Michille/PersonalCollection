<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from collection_table where code_no='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['code_no'];
		$customer_id =$_POST['customer_id'];
		$due_date =$_POST['due_date'];
		$status =$_POST['status'];
		$date_paid =$_POST['date_paid'];
		$interest =$_POST['interest'];
		$update="
		UPDATE collection_table 
		SET 
			code_no='".$id."', 
			customer_id='".$customer_id."', 
			due_date='".$due_date."', 
			status='".$status."',
			date_paid='".$date_paid."', 
			interest='".$interest."'
		where
			code_no=".$id; 
		
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewcollection.php' : window.location.href='viewcollection.php';
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
		<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
		<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Products</a>
		<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>
	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['code_no'];?>" />
			<label>code_no</label><p><input type="text" class="form-control" name="code_no" placeholder="Enter code_no"
			required value="<?php echo $row['code_no'];?>" /></p>
			<label>customer_id</label><p><input type="text" class="form-control" name="customer_id" placeholder="Enter customer_id"
			required value="<?php echo $row['customer_id'];?>" /></p>
			<label>due_date</label><p><input type="date" class="form-control" name="due_date" placeholder="Enter due_date" 
			required value="<?php echo $row['due_date'];?>" /></p>
			 <label> status: </label>
					<select input type="text" name="status" class="form-control" placeholder="status" required value="<?php echo $row['status'];?>">
						<option placeholder=""></option>
						<option placeholder=""> Paid</option>
						<option placeholder=""> Unpaid</option>
					</select><br><br>
			<label>date_paid</label><p><input type="date" class="form-control" name="date_paid" placeholder="Enter date_paid" 
			required value="<?php echo $row['date_paid'];?>" /></p>
			<label>interest</label><p><input type="text" class="form-control"name="interest" placeholder="Enter interest" 
			required value="<?php echo $row['interest'];?>" /></p>
			<p><input name="update_record" type="submit" class="form-control" value="Update" /></p>
		</form>
		</center>
</div>
</div>
</body>
</html>