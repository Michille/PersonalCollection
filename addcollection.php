<<<<<<< HEAD
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
=======
<?php include('processadd.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Collection</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-responsive">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <a class="navbar-brand" href="home.html">
			<img src="logo.jpg" style="float:left;" width="150" height="50" alt=""></a>
 	    </a>
           
            <li class="nav-item ">
              <a class="nav-link " href="home.php" >
               Home 
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="aboutus.php" >
               About us
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcustomer.php" >
              Customer
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addproducts.php" >
               Product
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcollection.php" >
               Collection
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="additems.php" >
               Items
              </a>
			  </li><li class="nav-item ">
              <a class="nav-link " href="checkbox.php" >
               Checkbox
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav>
	<br/><br/><br/><br/>
	<a href="viewcollection.php" class="btn btn-info" role="button">View Collection & Items List</a>
    <div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<form method="POST">
	<b><a style="font-size:20px;">Customer Name:</b></a>
		<?php
			$sql = "SELECT * FROM customer_table";
			$result = mysqli_query($mysqli, $sql);

		?>
		<select name="customer_id" class="form-control">
		<?php
			$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)){
					
		?>
			<option value="<?php echo $row['Customer_ID'];?>"><?php echo $row['Firstname'];?></option>
			<?php
				}
			?>
		</select>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Status:</label></b>
		<select name="status" class="form-control" value="<?php echo $status;?>"placeholder="status" required>
			<option value="" placeholder="status" required></option>
			<option value="paid">Paid</option>
			<option value="unpaid">Unpaid</option>
		</div>
		</select>
		
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Due Date:</label></b>
			<input type="date" name="due_date" class="form-control" value="<?php echo $due_date;?>"placeholder="due_date" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Interest:</label></b>
			<input type="interest" name="interest" class="form-control" value="<?php echo $interest;?>"placeholder="interest" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Date Paid:</label></b>
			<input type="date" name="date_paid" class="form-control" value="<?php echo $date_paid;?>"placeholder="date_paid" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="viewcollection.php"class="btn btn-info">View Sales</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
			<a href="additems.php"class="btn btn-primary"> +Add Items</a>
		<?php endif;?>
		</div>
	</form>
	</div>
</div>
	
	</div>
</body>
</html>
>>>>>>> New update
