<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from product_table where Product_ID='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
<<<<<<< HEAD
		$id =$_POST['Product_ID'];
		$part =$_POST['Particular'];
		$unit =$_POST['Unit'];
		$reg_price =$_POST['Regular_Price'];
		$disc =$_POST['Discount'];
		$update="
		UPDATE product_table 
		SET 
			Product_ID='".$id."', 
			Particular='".$part."', 
			Unit='".$unit."',
			Regular_Price='".$reg_price."', 
			Discount='".$disc."'
=======
		$id =$_POST['Product_ID'];$part =$_POST['Particular'];$unit =$_POST['Unit'];$reg_price =$_POST['Regular_Price'];$disc =$_POST['Discount'];
		$update="UPDATE product_table SET Product_ID='".$id."', Particular='".$part."', Unit='".$unit."',Regular_Price='".$reg_price."', Discount='".$disc."'
>>>>>>> Last Commit
		where
			Product_ID=".$id;
		
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewproducts.php' : window.location.href='viewproducts.php';
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
<<<<<<< HEAD
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
=======
<body>
>>>>>>> Last Commit
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
<<<<<<< HEAD
               Home 
=======
               Home /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="about.php" >
<<<<<<< HEAD
               About us
=======
               About us /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="Viewcustomer.php" >
<<<<<<< HEAD
              Customer
=======
              Customer /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewproducts.php" >
<<<<<<< HEAD
               Product
=======
               Product /
>>>>>>> Last Commit
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewcollection.php" >
<<<<<<< HEAD
               Collection
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout
=======
               Collection /
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items /
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout /
>>>>>>> Last Commit
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav><br/><br/><br/><br/><br/><br/>
		<center><h1>Update Record</h1>
	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['Product_ID'];?>" />
<<<<<<< HEAD
			<label>Product_ID:</label>
			<p><input type="text" class="form-control" name="Product_ID" placeholder="Enter Product_ID"
			required value="<?php echo $row['Product_ID'];?>" /></p>
			<label>Particular:</label><p><input type="text" class="form-control" name="Particular" placeholder="Enter Particular"
			required value="<?php echo $row['Particular'];?>" /></p>
			<label>Unit:</label><p><input type="text" class="form-control" name="Unit" placeholder="Enter Unit" 
			required value="<?php echo $row['Unit'];?>" /></p>
			<label>Regular_Price:</label><p><input type="text" class="form-control" name="Regular_Price" placeholder="Enter Regular_Price" 
			required value="<?php echo $row['Regular_Price'];?>" /></p>
			<label>Discount:</label><p><input type="text" class="form-control" name="Discount" placeholder="Enter Discount" 
=======
			<b><a style="font-size:20px;">Product_ID:</b></a>
			<p><input type="text" class="form-control" name="Product_ID" placeholder="Enter Product_ID"
			required value="<?php echo $row['Product_ID'];?>" /></p>
			<b><a style="font-size:20px;">Particular:</b></a>
			<p><input type="text" class="form-control" name="Particular" placeholder="Enter Particular"
			required value="<?php echo $row['Particular'];?>" /></p>
			<b><a style="font-size:20px;">Unit:</b></a>
			<input type="text" class="form-control" name="Unit" placeholder="Enter Unit" 
			required value="<?php echo $row['Unit'];?>" /></p>
			<b><a style="font-size:20px;">Regular_Price:</b></a>
			<p><input type="text" class="form-control" name="Regular_Price" placeholder="Enter Regular_Price" 
			required value="<?php echo $row['Regular_Price'];?>" /></p>
			<b><a style="font-size:20px;">Discount:</b></a>
			<p><input type="text" class="form-control" name="Discount" placeholder="Enter Discount" 
>>>>>>> Last Commit
			required value="<?php echo $row['Discount'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>