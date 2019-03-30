<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$code_no =$_REQUEST['code_no'];
    $customer_id =$_REQUEST['customer_id'];
    $due_date = $_REQUEST['due_date'];
	$status = $_REQUEST['status'];
	$date_paid = $_REQUEST['date_paid'];
    $interest = $_REQUEST['interest'];
    $ins_query="insert into collection_table(code_no,customer_id,due_date,status,date_paid,interest) values
    ('$code_no','$customer_id','$due_date','$status','$date_paid','$interest')";
    mysqli_query($con,$ins_query);
    $status = "New collection added Successfully.
    </br></br><a href='viewcollection.php'>View Products</a>";
}

if(isset($_POST['new']) && $_POST['new']==1){
	$code_no =$_REQUEST['code_no'];
	$product_id =$_REQUEST['product_id'];
	$quantity =$_REQUEST['quantity'];
	$unit =$_REQUEST['unit'];
	$amount =$_REQUEST['amount'];
	$ins_query="insert into collection_items(code_no,product_id,quantity,unit,amount) values
	('$code_no','$product_id','$quantity','$unit','$amount')";
	mysqli_query($con,$ins_query);
	$status = "New Items added Succesfully.
	<a href='viewcollection.php'>View Collection</a>";
}
?>

	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Collection</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div class="sidebar">
	   <a class="mt-5" href="index.php"><i class="fa fa-fa fa-home"></i> Home</a>
		<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
		<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>View</a>
		<a href="addprod.php"><i class="fa fa-address-card-o"></i>Product </a>
		<a href="addcus.php"><i class="fa fa-address-card-o"></i>Customers </a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
	   <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
	</div>
	<div class="main">
	<div class="form-inline">
	<div>
		<center><h2><font face="Britannic Bold">Add New Collection</font></h2></center>	
			<form class="form-inline" name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />	
			<p><input type="text" class="form-control" name="code_no" placeholder="Enter code_no" required /></p>
			<p><select name="customer_id"  style = "height:42px; "placeholder="Enter customer_id" required></p>
			<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM customer_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["customer_id"];  ?>"><?php echo $row["first_name"]; echo " "; echo $row["last_name"]; ?></option>
				<?php		}
				
				}
				?>
				</select>
			<br><p><input type="date" class="form-control" name="due_date"  style = "height:42px; "placeholder="Enter due_date" required /></p><br>
			<select input type="text" name="status" class="form-control" placeholder="status" required value="<?php echo $row['status'];?>">
						<option placeholder=""></option>
						<option placeholder=""> Paid</option>
						<option placeholder=""> Unpaid</option>
					</select><br><br>
			<p><input type="date" class="form-control" name="date_paid"  style = "height:42px; "placeholder="Enter date_paid" required /></p><br><br>
			<p><input type="text" class="form-control" name="interest" placeholder="Enter interest" required /></p>
	<center><div class="main">
	<br/><br/><br/><div class="form">
	<div>
	<h2><font face="Britannic Bold"> Items</font></h2>
			<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<label>Code_no:</label>
				<p><input type="text" class="form-control" name="code_no" placeholder="Enter code_no" required /></p>
				<p><select name="product_id"  style = "width:200px; height:50px; "placeholder="Enter product_id" required></p>
				<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM product_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["product_id"];  ?>"><?php echo $row["particular"]; echo " ";?></option>
				<?php		}
				
				}
				?>
				</select>				
				<label>Quantity:</label>
				<p><input type="number" class="form-control" name="quantity" style = "width:200px; height:50px;" placeholder="Enter quantity" required /></p>
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
					</select>
				<label>Amount:</label><p>
				<input type="text" class="form-control" name="amount" placeholder="Enter amount" required /></p>
				<p><input name="submit" type="submit" value="Submit" /></p>
			</form>	
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</center>
</body>
</html>
