
<html lang="en">

  <head>

    <title>Personal Collection</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
  
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <a class="navbar-brand" href="home.html">
			<img src="photos/logo.png" width="80" height="50" alt=""></a>
 	    </a>
           
			<li class="nav-item ">
              <a class="nav-link " href="about.php" >
               About us /
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcustomer.php" >
               Customer /
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addproducts.php" >
              Product /
              </a>
			<li class="nav-item ">
              <a class="nav-link " href="addcollection.php" >
               Collection /
              </a>
			 <li class="nav-item ">
              <a class="nav-link " href="additems.php" >
               Items /
              </a>
            </li>
            </li>
			  </a>
			<li class="nav-item ">
              <a class="nav-link " href="changepass.html" >
               Change Pass /
              </a>
			<li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout /
              </a>
            </li>
          </ul>
        </div>
		</button>
    </nav><br/><br/>

<header>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `admin` (username, password, email)
VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "
<br/><center>Click here to <a href='login.php'>Login</a></div></center>";
        }
    }else{
?>
     
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox" >
          <div class="carousel-item active" style="background-image: url('photos/PERSONAL.jpg')">
            
          </div>
          
          <div class="carousel-item" style="background-image: url('photos/1st-Artwork-2130x795.jpg')">
        
          </div>
            
            <div class="carousel-item" style="background-image: url('photos/Blue-Wave-DWL-Lemon-Web-Banner-01.jpg')">
          </div>
          
          </div>
        </div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </header>
    <br><br>
	 <center><a href="index.php" class="btn btn-info" role="button">BACK</a></center>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<br><br>
<?php } ?>
</body>
</html>