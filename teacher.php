<?php include("inc/header.php"); ?>
    



	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">

<?php 
     $getTeacher = $tsr->getAllCurrentTeacher();
        if ($getTeacher) {
            while ($result = $getTeacher->fetch_assoc()) {
 ?> 
                <div class="card" style="width: 33%; float:left;">
                    <img class="card-img-top" src="<?php echo $result['t_photo']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $result['t_name']; ?></h5>
                        <p class="card-title text-center"><?php echo $result['t_category']; ?></p>
                        <a href="teacher_details.php?t_id=<?php echo $result['t_id']; ?>" class="btn btn-primary  btn-block">Details</a>
                    </div>
                </div>
<?php } } ?>
  
  
			</div>
			
			<div class="col-md-3 float-right">					
				<?php include("inc/sidebar.php"); ?>					  
			</div>

		</div>
		


		
		  
	</div>
	<?php include("inc/footer.php"); ?>
