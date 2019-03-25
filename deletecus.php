<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM customer_table WHERE customer_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewcus.php"); 
?>