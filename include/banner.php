<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
       <?php
	   
      for($i=1;$i<=$rowcount;$i++)
      {
	     
		 $row=mysqli_fetch_array($query);
	    ?>
	  <?php
	  
	  if($i==1){
		  ?>
		  
    <div class="carousel-item active">
      <img class="d-block w-100" src="slider-img/<?php echo $row['image_path'] ?>" alt="First slide" >
    </div> 
	<?php	  
	  }else{
		  ?>
		 <div class="carousel-item ">
      <img class="d-block w-100" src="slider-img/<?php echo $row['image_path'] ?>" alt="First slide" >
    </div> 
		  
	<?php	  
	  }
	  
	  ?>
  
    
	
	<?php }
	   
	   ?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>