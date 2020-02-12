<br>
<div class="container col-lg-10 mb-5 bg-light p-4">

<?php
include("connect.php");


$query=mysqli_query($con,'select * from new_post order by id desc limit 2');


while($row=mysqli_fetch_array($query))
{
$id=$row['id'];	
$title=$row['title'];	
$author=$row['author'];	
$image=$row['image'];	
$content=substr($row['content'],0,300);	
$date=$row['date'];	
?>
<br>
<div class="container">
<h2 class="text-center"><i class="fa fa-rss-square" aria-hidden="true"></i>&nbsp;<?php echo $title ;?></h2>
<hr>
<p class="mb-2"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;<i>Published on: &nbsp;&nbsp;<u><?php echo $date;?></u></i></p>


<p align="right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><i>Published by: <?php echo $author;?></i></p>
<br>
<center><img src="upload-img/<?php echo $image;?>" class="img-thumbnail" width="800" height="50%"/></center>
<hr>
<p align="justify" style="padding:2px 15px 2px"><?php echo $content;?></p>

<p align="right"><a href="fullpost.php?id=<?php echo $id; ?>"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Read More</a></p>
<hr>
</div>
<?php }
?>


</div>