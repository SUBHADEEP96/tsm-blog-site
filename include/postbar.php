<div class="container py-5">
<h2 class="text-center"><i class="fa fa-rss-square" aria-hidden="true"></i> &nbsp;Our Recent Blogs</h2>
<hr>
<div class="row mt-4">
<?php

include('connect.php');

$q="select * from new_post order by id desc";

$query_run=mysqli_query($con,$q);

$check=mysqli_num_rows($query_run)>0;

if($check)
{

while($row=mysqli_fetch_array($query_run))	
{
	?>
	
    <div class="col-md-4 mb-5">
<div class="card">
<div class="card-body">
<a href="fullpost.php?id=<?php echo $row['id'];?>"><img src="upload-img/<?php echo $row['image'];?>" class="card-img-top"></a>

<a href="fullpost.php?id=<?php echo $row['id'];?>"><p class="card-text text-center text-dark"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<?php echo $row['title']; ?></p></a>

<a href="fullpost.php?id=<?php echo $row['id'];?>"><p class="card-text text-center text-dark"><i class="fa fa-clock-o" aria-hidden="true"></i></i>&nbsp;<?php echo $row['date']; ?></p></a>

</div>

</div>

</div>
	
	<?php
}
}
else
{
	
	echo "no record found";
	
}


?>






</div>
</div>