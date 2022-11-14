<?php include("inc/header.php"); ?>
    
<?php 
if (isset($_GET['t_id'])) {
    $t_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['t_id']);
    $getinfo = $tsr->getTeacherInfo($t_id);
}
 ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">
<?php 
    if ($getinfo) {
    while ($result = $getinfo->fetch_assoc()) {
 ?>   

						  <div class="card mb-3">
							<img class="card-img-top" src="<?php echo $result['t_photo']; ?>" alt="Card image cap" style="height:200px; width:200px; margin-left: auto;margin-right: auto;">
							<div class="card-body">
							<h5 class="card-title text-center"><?php echo $result['t_name']; ?></h5>
								  <table class="table table-striped">  
										<tr>
											<td width="250"><img src="img/list-border.png" style="margin-right:10px;">Dagination</td>
											<td width="20">:</td>
											<td width="400"><?php echo $result['t_category']; ?></td>
										</tr>
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
											<td><img src="img/list-border.png" style="margin-right:10px;">Contact Number </td>
											<td>:</td>
											<td><?php echo $result['t_contact']; ?></td>
										</tr>   
										<tr>
											<td><img src="img/list-border.png" style="margin-right:10px;">E-mail Address</td>
											<td>:</td>
											<td><?php echo $result['t_email']; ?></td>
										</tr>               
									</table>
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
