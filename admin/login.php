<?php


session_start();

include('include/connect.php');


?>

<html>
<head>

<title>Admin Login</title>

</head>
<body>
<form action="logincheck.php" method="post">
<table width="400" align="center" border="10">
<tr>
<td colspan="5" align="center" bgcolor="blue">
<h3>Admin Login</h3>
</td>
</tr>
<tr>
<td >Username:</td>
<td><input type="text" name="username" size="35"></td>

</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password" size="35"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="login" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
/*
include('include/connect.php');
if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$login_query="select * from admin_login where username='$username' and password='$password'";
	
	$run=mysqli_query($con,$login_query);
	
	if(mysqli_num_rows($run)>0){
		
		$_SESSIONS['username']=$username;
		
		echo "<script>window.open('index.php?view=view','_self');</script>";
		
	}
	else{
		
		echo "<script>alert('username and password is incorrect');</script>";
		
	}
}*/
?>
