<?php

session_start();

include('include/connect.php');



if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$sql= "select * from admin_login where username='$username' and  password='$password'";
    $query=mysqli_query($con,$sql);
	
	$row=mysqli_num_rows($query);
		
		if($row==1){
			
			echo "login success";
			
			$_SESSION['username']=$username;
			header('location:index.php');
			
		}
		else{
			
			echo "login failed";
			
			header('location:login.php');
			
		}
		
	
}


?>