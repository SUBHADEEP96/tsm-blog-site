<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--custo css-->
 <!-- Favicons -->
  <link href="image/favi.jpg" rel="icon">

    <title>NEW SINHA JEWELLERS</title>
	<style>
	
</style>
  </head>
  <body>
  <form action="insert-post.php" method="post" name="frm"  enctype="multipart/form-data">
  <table  border="10" align="center" width="800">
  <tr>
  <td colspan="5" align="center" bgcolor="blue"><h1>Insert New Post Here</h1></td>
  
  </tr>
  <tr>
  <td align="right">Post Title:</td>
  <td><input type="text" name="title" size="60"/></td>
  
  </tr>
  <tr>
  <td align="right">Author:</td>
  <td><input type="text" name="author" size="60"/></td>
  
  </tr>
  <tr>
  <td align="right">Post Image:</td>
  <td><input type="file" name="image" size="60"/></td>
  
  </tr>
  
   <tr>
  <td align="right">Post Content:</td>
  <td><textarea name="content" cols="70" rows="35"></textarea></td>
  
  </tr>
  <tr>
  <td colspan="5" align="center"><input type="submit" name="submit" value="SUBMIT"/></td>
  </tr>
  </table>
  </form>
  </body>
</html>
<?php

include("include/connect.php");

if(isset($_POST['submit'])){
	
	
	if($_POST['title']=='' or $_POST['author']=='' or $_POST['content']==''){
		
		echo("<script>alert('Fill All The Field')</script>");
		exit();
		
	}
	
	else{
	
     $title=$_POST['title'];
     $author=$_POST['author'];
     $content=$_POST['content'];
     $image_name=$_FILES['image']['name'];
     $image_type=$_FILES['image']['type'];
     $image_size=$_FILES['image']['size'];
     $image_tmp=$_FILES['image']['tmp_name'];
     $date=date('y.m.d');
	 
	 	if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
		{
			
			move_uploaded_file($image_tmp,"upload-img/$image_name");
			
		}
		else{
			
			echo("<script>alert('Invalid File Type')</script>");
			
		}
		
		$query="insert into new_post(title,author,image,content,date) values('$title','$author','$image_name','$content','$date')";
		
		if(mysqli_query($con,$query))
		{
			
			echo "<script>alert('Post has been Inserted')</script>";
			echo "<script>window.open('index.php?view=view','_self')</script>";
		}
		
		
	}
	
	
	
	
	
}





?>

