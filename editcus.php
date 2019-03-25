<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from customer_table where customer_id='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$first_name =$_POST['first_name'];
		$last_name =$_POST['last_name'];
		$middlename =$_POST['middlename'];
		$extname =$_POST['extname'];
		$phone_number =$_POST['phone_number'];
		$street =$_POST['street'];
		$city =$_POST['city'];
		$update="
		UPDATE customer_table 
		SET 
			first_name='".$first_name."', 
			last_name='".$last_name."', 
			middlename='".$middlename."',
			extname='".$extname."', 
			phone_number='".$phone_number."', 
			street='".$street."',
			city='".$city."' 
		where
			customer_id=".$id;
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewcus.php' : window.location.href='viewcus.php';
				</script>
			";
			
			
		}
		
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Update Customer Record </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
	<div class="sidebar">
		<a href="profile.php"><i class="fa fa-fw fa-home"></i> Profile</a>
		<a href="insert.php"><i class="fa fa-address-card-o"></i>Add new Contact</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>

	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['customer_id'];?>" />
			<p><input type="text" class="form-control" name="first_name" placeholder="Enter first_name"
			required value="<?php echo $row['first_name'];?>" /></p>
			<p><input type="text" class="form-control" name="last_name" placeholder="Enter last_name" 
			required value="<?php echo $row['last_name'];?>" /></p>
			<p><input type="text" class="form-control" name="middlename" placeholder="Enter middlename" 
			required value="<?php echo $row['middlename'];?>" /></p>
			<p><input type="text" class="form-control" name="extname" placeholder="Enter extname" 
			required value="<?php echo $row['extname'];?>" /></p>
			<p><input type="number" class="form-control" name="phone_number" placeholder="Enter phone_number" 
			required value="<?php echo $row['phone_number'];?>" /></p>
			<p><input type="text" class="form-control" name="street" placeholder="Enter street" 
			required value="<?php echo $row['street'];?>" /></p>
			<p><input type="text" class="form-control" name="city" placeholder="Enter city" 
			required value="<?php echo $row['city'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>