<?php include("inc/header.php"); ?>
    



	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">
            <h5 class="card-title text-success text-center">Retried Teacher</h5>
<?php 
     $getTeacher = $tsr->getAllRetriedTeacher();
        if ($getTeacher) {
            while ($result = $getTeacher->fetch_assoc()) {
 ?> 
						<div class="card col-12">
                            <div class="row">
                                <div class="col-3" style="float:left;">
                                <img class="card-img-top" src="<?php echo $result['t_photo']; ?>" alt="Card image cap" style="height:200px; width:200px;margin-top:40px;">
                                </div>
                                <div class="col-8" style="float:right;">
                                    <h5 class="card-title text-center"><?php echo $result['t_name']; ?></h5>
                                    <table class="table table-striped">
                                            <tr>
                                                <td><img src="img/list-border.png" style="margin-right:10px;">Index No </td>
                                                <td>:</td>
                                                <td><?php echo $result['t_index']; ?></td>
                                            </tr>  
                                            <tr>
                                                <td><img src="img/list-border.png" style="margin-right:10px;">Education Qualefication</td>
                                                <td>:</td>
                                                <td><?php echo $result['t_edu']; ?></td>
                                            </tr>  
                                            <tr>
                                                <td><img src="img/list-border.png" style="margin-right:10px;">Contact Number</td>
                                                <td>:</td>
                                                <td><?php echo $result['t_contact']; ?></td>
                                            </tr>  
                                            <tr>
                                                <td><img src="img/list-border.png" style="margin-right:10px;">Retried Date </td>
                                                <td>:</td>
                                                <td><?php echo $result['t_retried_date']; ?></td>
                                            </tr>               
                                        </table>
                                </div>
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
