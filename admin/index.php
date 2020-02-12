<?php

session_start();

if(!isset($_SESSION['username']))
{
	
	header('location:login.php');
	
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--custo css-->
	<link rel="stylesheet" href="admin.css">


    <title>Admin Dashboard</title>
	<style>
	
</style>
  </head>
  <body>
  
  <div id="topbar">topbar</div>
  <div id="topmenu">topmenu</div>
  <div id="sidebar">
  <p><a href="logout.php">Logout</a></p>
  <p><a href="index.php?view=view">View Post</a></p>
  <p><a href="index.php?insert=insert">Insert New Post</a></p>
  
  
  
  </div>
  <div id="container">
  <?php
  if(isset($_GET['insert']))
  {
	  
	  include('insert-post.php');
	  
  }  
  
  
  
  ?>
  
  
  
  <?php
  include('include/connect.php');
  
 
	
$i=1;//local variable

if(isset($_GET['view']))
{
?>
	<table  width="100%" align="center" border="3px">
	<tr>
	<td align="center" colspan="10" bgcolor="blue"><h3>View All Posts</h3></td>
	</tr>
	<br>
	<tr>
	<th>S.No</th>
	<th>Post Title</th>
	<th>Post Date</th>
	<th>Post Author</th>
	<th>Image</th>
	<th>Post Content</th>
	<th>Edit Post</th>
	<th>Delete Post</th>
	</tr>
	<?php
	$query=mysqli_query($con,'select * from new_post order by id desc');
	while($row=mysqli_fetch_array($query))
    {
		
		$id=$row['id'];
		$title=$row['title'];
		$image=$row['image'];
		$content=substr($row['content'],0,400);
		$author=$row['author'];
		$date=$row['date'];
		?>
		<tr align="center">
		<td><?php echo $i++;?></td>
		<td><?php echo $title; ?></td>
		<td><?php echo $date; ?></td>
		<td><?php echo $author;?></td>
		<td><center><img src="../upload-img/<?php echo $image;?>" width="30" height="30"></center></td>
		<td><?php echo $content; ?></td>
		<td><a href="edit.php?edit=<?php echo $id;?>">Edit</a></td>
		<td><a href="Delete.php?del=<?php echo $id;?>">Delete</a></td>
		
		</tr>
		<?php
		}	
        ?>
	
	
	
	</table>
	

<?php	
}	
?>
</div>
  
  
  
  </body>
</html>

<?php
/*}*/
?>