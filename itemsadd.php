<?php
	require('db.php');
	include("authentication.php");
	$status = "";
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New ITEMS</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
		

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
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<a href="viewcollection.php" class="btn btn-info" role="button">View Collection</a>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	
		<center><h2><font face="Britannic Bold">Add Items</font></h2>
		<div style="width:900px;">
				
		<form action="itemsadd.php" method="post">
		<input type="hidden" name="new" value="1" />
		
		<br/><br/>
		<b><a style="font-size:20px;">Customer Name:</b></a>
		<select name="customers" id="customer">
		<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM customer_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["customer_id"];  ?>"><?php echo $row["Firstname"]; echo " "; echo $row["Lastname"]; ?></option>
				<?php		}
				
				}
				?>
				</select>
				<div class="form-group">
				
		<b><a style="font-size:20px;">Collection code:</b></a>
		<select name="code_no" id="code_no">
		<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM collection_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["Code_no"];  ?>"><?php echo $row["Code_no"];  ?></option>
				<?php		}
				
				}
				?>
			</select>
				
		
		<div class="main">
	<center><div class="main w-75">
	<div class="form">
	<div class="row" >	
		<br><br><br>
		<div class="column" style="; margin-left:85px;">
			<table width="100%" border="10" align="left" style="; background-color:white;">
		<thead>
		<tr>
			<th><strong>Product_ID</strong></th>
			<th><strong>Unit</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Amount</strong></th>
			<th><strong>Click</strong></th>
			
		</tr>
		</thead>
			<tbody>
		</div>
				</center>
			<?php
			$count=1;
			$sel_query="Select * from product_table";
			$result = mysqli_query($con,$sel_query);
			$count = mysqli_num_rows($result); // Count table rows
			while ($row = $result->fetch_object())
            {
                // set up a row for each record
                echo "<tr>";
                echo "<td>" . $row->Product_ID . "</td>";
                echo "<td>" . $row->Unit . "</td>";
                echo '<td> <input type="text" id="Quantity" style="width:70px; height:20px"/> </td>';
				echo '<td>'.$row->Regular_Price.'</td>';
                echo "<td><input type='checkbox' name='representatives' id='checkbox' data-price='".$row->Regular_Price."' data-id='".$row->Product_ID ."'   data-unit='".$row->Unit."'' /></td>";
                echo "</tr>";
				mysqli_query($con,$sel_query);
				$status = "New items added Successfully.
				</br></br><a href='viewcollection.php'>View Sales</a>";
            } 
			?>
		</tbody>
		</table>
		<br/><br/><br/><br/><br/>
		<p><input name="submit" type="submit" class="form-control" id="submit" value="Submit" /></p>
		</div>	
	</form>	
</center>
<script>

$(document).ready(function() {
	
		$("#submit").on('click', function(){
			
			var code = $("#code_no").val();
			
			var id = [];
			var price = [];
			var qty = [];
			var unit = [];
			var chck = $('input[name=representatives]');
			
			/*var empty = $(this).parent().find("input[type='text']").filter(function() {
					console.info(this.value === "");
				}); */
				
			if(chck.is(':checked')){
				$('input[name=representatives]:checked').each(function(){	
					id.push($(this).attr('data-id'));
					price.push($(this).attr('data-price'));
					unit.push($(this).attr('data-unit'));
					$("input[type='text']").each(function(){
					if($(this).val().length > 0){
						qty.push($(this).val());
					}
				});
				});	
			};
				 $.ajax({
					url: "insert_sales.php",
					type: "post",
					data:{code:code,id:id,unit:unit,qty:qty,price:price},
					success: function(data){
						alert(data);
					}
				 });
			});
});


</script>
	
</body>
</html>