<?php

include('connect.php');

$query=mysqli_query($con,"select * from slider");

$rowcount=mysqli_num_rows($query);



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!--custo css-->
	<link rel="stylesheet" href="style.css">
	   
 <!-- Favicons -->
  <link href="image/favi.jpg" rel="icon">
<!--font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<!--google font-->
	<link href="https://fonts.googleapis.com/css?family=Odibee+Sans|Playfair+Display&display=swap" rel="stylesheet"><title>Thinksurfmedia | Our-Blog</title>
	<style>
	body{
	font-family: 'Odibee Sans', cursive;
font-family: 'Playfair Display', serif;	
	}
	</style>
  </head>
  <body>
  
  <!---topbar starts here--->
 <?php 
 include('include/topbar.php');
 ?>
  <!---topbar ends here-->
  <!---navbar starts here-->
  <?php 
 include('include/navbar.php');
 ?>
<!----navbar ends here--->  
<!---slider starts here---->
<?php /*
 include('include/banner.php');*/
 ?>
 <div class="container-fluid">
 
 <img src="image/ban.jpg" style="max-width:100%;height:auto">
 
 </div>
<!---slider ends here---->
<!---posts---->
<?php 
 include('include/post.php');
 ?>
<!---post ends here--->

<!---postbar starts here--->

<?php 
 include('include/postbar.php');
 ?>


<!---postbar ends here---->

<!---footer starts here--->
<?php 
 include('include/footer.php');
 ?>
<!---footer ends here--->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>