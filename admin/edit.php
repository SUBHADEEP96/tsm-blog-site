<html>

<body>


<?php
include('index.php');
include('include/connect.php');

$edit_id=$_GET['edit'];

$query=mysqli_query($con,"select * from new_post where id='$edit_id'");


while($row=mysqli_fetch_array($query))
{
	
	$edit_id1=$row['id'];
	$title=$row['title'];
	$image=$row['image'];
	$content=$row['content'];
	$author=$row['author'];
	$date=$row['date'];
	
	?> 
	
	<form action="edit.php?edit_form=<?php echo $edit_id1;?>" method="post" enctype="multipart/form-data">
	<table border="10" align="center">
	<tr>
	
	<td colspan="5" align="center" bgcolor="blue"><h2>Edit Post</h2></td>
	
	</tr>
	<tr>
	<td align="right">Post Title</td>
	<td><input type="text" name="title" size="60" value="<?php echo $title;?>"></td>
	
	</tr>
	
	<tr>
	
	
	<td align="right">Author</td>
	<td><input type="text" name="author" size="60" value="<?php echo $author;?>"></td>
	
	</tr>
	
	<tr>
	
	
	<td align="right">Post Image</td>
	<td><input type="file" name="image" size="60"/>
	
	<img src="../upload-img/<?php echo $image;?>" width="100" height="100"/>
	</td>
	
	</tr>
	
	<tr>
	
	<td align="right">Post Content</td>
	<td><textarea name="content" cols="62" rows="17" >
	<?php echo $content;?>
	</textarea></td>
	</tr>
	
	<tr>
	
	<td colspan="5" align="center"><input type="submit" name="update" value="Update Now"></td>
	</tr>
	
	</table>
	</form>
<?php	
}
?>


<?php
if(isset($_POST['update']))
{
	
	$update_id=$_GET['edit_form'];
	
	$post_title=$_POST['title'];
	$post_date=date('y-m-d');
	$post_author=$_POST['author'];
	$post_content=$_POST['content'];
	$post_image=$_FILES['image']['name'];
	$post_image_type=$_FILES['image']['type'];
	$post_image_size=$_FILES['image']['size'];
	$post_image_tmp=$_FILES['image']['tmp_name'];
	
	move_uploaded_file($post_image_tmp,"../upload-img/$post_image");
	
	$update_query="update new_post set title='$post_title', author='$post_author',image='$post_image',content='$post_content',date='$post_date' where id='$update_id'";
	if(mysqli_query($con,$update_query))
	{
		echo "<script>alert('Post has been updated');</script>";
		echo "<script>window.open('index.php?view=view','_self')</script>";
		
	}
}



?>