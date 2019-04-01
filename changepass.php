<?php
require('db.php');
include("authentication.php");
		
		if(isset($_POST['re_password']))
		{
			$user = $_SESSION['username'];
			$old_password= $_POST['old_password'];
			$new_password= $_POST['new_password'];
			$con_password= $_POST['con_password'];

			if($new_password != $con_password){
				echo "Password did not match!";
			}

			$chg_pwd = mysqli_query($con,"select * from admin where username='$user'");
			$chg_pwd1 = mysqli_fetch_array($chg_pwd);
			
			
			$data_pwd = $chg_pwd1['password'];
			
			if($data_pwd==md5($old_password)){
				echo $user;
				if($new_password==$con_password){
					
					$update_pwd=mysqli_query($con,"update admin set password='".md5($new_password)."' where username='$user'");
					header('location: login.php');
				}else{
					$change_pwd_error="Your new and Retype Password is not match !!!";
				}
			}else{
				$change_pwd_error="Your old password is wrong !!!";
			}
		}
	?>