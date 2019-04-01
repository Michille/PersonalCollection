<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM product_table WHERE Product_ID=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewproducts.php"); 
?>