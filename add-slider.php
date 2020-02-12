

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
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Thinksurfmedia | Our-Blog</title>
  </head>
  <body>
 
  
  <!----->
<div class="row justify-content-center">
<form action="add-slider.php" method="post" enctype="multipart/form-data">
<div class="form-group ">
<input type="file" name="image" class="form-control p-1" required>
</div>
<div class="form-group ">
<input type="submit" name="submit" class="btn" value="SUBMIT">
</div>

</form>
</div>
<!------->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php

include('connect.php');

if(isset($_POST['submit'])){
	
	$image_name=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
	
	if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
		{
			
			move_uploaded_file($image_tmp,"slider-img/$image_name");
			
		}
		else{
			
			echo("<script>alert('Invalid File Type')</script>");
			
		}
		
		$query="INSERT INTO slider(image_path) VALUES ('$image_name')";
		
		if(mysqli_query($con,$query))
		{
			
			echo "<script>alert('Post has been Inserted')</script>";
			
		}
	
}


?>
