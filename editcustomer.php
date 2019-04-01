<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from customer_table where Customer_ID='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	if(isset($_POST['update_record'])){
		$firstname =$_POST['Firstname'];
		$lastname =$_POST['Lastname'];
		$middlename =$_POST['Middlename'];
		$extendedname =$_POST['Extendedname'];
		$phonenumber =$_POST['Phonenumber'];
		$street =$_POST['Street'];
		$city =$_POST['City'];
		$update="
		UPDATE customer_table 
		SET 
			Firstname='".$firstname."', 
			Lastname='".$lastname."', 
			Middlename='".$middlename."',
			Extendedname='".$extendedname."', 
			Phonenumber='".$phonenumber."', 
			Street='".$street."',
			City='".$city."' 
		where
			Customer_ID=".$id;
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='Viewcustomer.php' : window.location.href='Viewcustomer.php';
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
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-responsive">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <a class="navbar-brand" href="home.html">
			<img src="logo.png" style="float:left;" width="500" height="50" alt=""></a>
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
              <a class="nav-link " href="logout.php" >
               Logout
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav><br/><br/>
	<br><br><br><br>
		<center><h1>Update Record</h1>
	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['Customer_ID'];?>" />
			 <label> FirstName: </label>
			<p><input type="text" class="form-control" name="Firstname" placeholder="Enter FirstName"
			required value="<?php echo $row['Firstname'];?>" /></p>
			<label> Lastname: </label>
			<p><input type="text" class="form-control"name="Lastname" placeholder="Enter Lastname" 
			required value="<?php echo $row['Lastname'];?>" /></p>
			<label> Middlename: </label>
			<p><input type="text" class="form-control"name="Middlename" placeholder="Enter Middlename" 
			required value="<?php echo $row['Middlename'];?>" /></p>
			<label> Extendedname: </label>
			<p><input type="text" class="form-control" name="Extendedname" placeholder="Enter Extendedname" 
			required value="<?php echo $row['Extendedname'];?>" /></p>
			<label> Phonenumber: </label>
			<p><input type="number" class="form-control" name="Phonenumber" placeholder="Enter Phonenumber" 
			required value="<?php echo $row['Phonenumber'];?>" /></p>
			<label> Street: </label>
			<p><input type="text" class="form-control" name="Street" placeholder="Enter Street" 
			required value="<?php echo $row['Street'];?>" /></p>
			<label> City: </label>
			<p><input type="text" class="form-control" name="City" placeholder="Enter City" 
			required value="<?php echo $row['City'];?>" /></p>
			<p><input name="update_record" type="submit"  value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>