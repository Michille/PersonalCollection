<?php 

include('db.php');
include('authentication.php');

$code = $_POST['code'];
$id   = $_POST['id'];
$unit = $_POST['unit'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$sales = array();
$insert = "";

for($i =0; $i < count($_POST['id']); $i++){
	$sales[] = $code;
}

for($num=0;$num < count($_POST['id']); $num++){
	$sales1 = mysqli_real_escape_string($con, $sales[$num]);
	$id1 = mysqli_real_escape_string($con, $id[$num]);
	$unit1 = mysqli_real_escape_string($con, $unit[$num]);
	$qty1 = mysqli_real_escape_string($con, $qty[$num]);
	$price1 = mysqli_real_escape_string($con, $price[$num]);
	
	$total = number_format($qty1,2);
	$total1 = $price1 * $total;
	$insert .= "INSERT INTO collection_items(Code_no,Product_ID,Quantity,Unit,Amount) VALUES($sales1,$id1,$qty1,'$unit1',$total1);";
}
if($insert != ""){
	if(mysqli_multi_query($con, $insert)){
		echo "Success!";
	}
	else{
		echo "Something went wrong!";
	}
}
?>
