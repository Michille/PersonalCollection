<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from collection_table where Code_no='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['Code_no'];
		$custom_id =$_POST['Customer_ID'];
		$ddate =$_POST['Due_date'];
		$stat =$_POST['Status'];
		$dpaid =$_POST['Date_paid'];
		$intrst =$_POST['Interest'];
		$update="
		UPDATE collection_table 
		SET 
			Code_no='".$id."', 
			Customer_ID='".$custom_id."', 
			Due_date='".$ddate."', 
			Status='".$stat."',
			Date_paid='".$dpaid."', 
			Interest='".$intrst."'
		where
			Code_no=".$id; 
		
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
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <a class="nav-link " href="about.php" >
               About us
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="Viewcustomer.php" >
              Customer
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewproducts.php" >
               Product
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="checkbox.php" >
               Checkbox
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav><br/><br/><br/><br/><br/><br/>
		<center><h1>Update Record</h1>

	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['Code_no'];?>" />
			<label>Code_no</label><p><input type="text" class="form-control" name="Code_no" placeholder="Enter Code_no"
			required value="<?php echo $row['Code_no'];?>" /></p>
			<label>Customer_ID</label><p><input type="text"class="form-control"  name="Customer_ID" placeholder="Enter Customer_ID"
			required value="<?php echo $row['Customer_ID'];?>" /></p>
			<label>Due_date</label><p><input type="date" class="form-control" name="Due_date" placeholder="Enter Due_date" 
			required value="<?php echo $row['Due_date'];?>" /></p>
			 <label> Status: </label>
					<select input type="text" name="stat" class="form-control" placeholder="Status" required value="<?php echo $row['Status'];?>">
						<option placeholder=""></option>
						<option placeholder=""> Paid</option>
						<option placeholder=""> Unpaid</option>
					</select><br><br>
			<label>Date_paid</label><p><input type="date" class="form-control" name="Date_paid" placeholder="Enter Date_paid" 
			required value="<?php echo $row['Date_paid'];?>" /></p>
			<label>Interest</label><p><input type="text" class="form-control" name="Interest" placeholder="Enter Interest" 
			required value="<?php echo $row['Interest'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>