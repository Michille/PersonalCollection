<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM collection_items WHERE Code_no=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewitems.php"); 
?>