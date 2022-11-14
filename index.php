<?php include_once("inc/header.php"); ?>

	<div class="slider">
	<?php include_once("inc/slider.php"); ?>
	</div>


	<div class="main_content border">
		<div class="row">
			<div class="col-md-9 float-left border">
				<div class="row">
					
					<div class="card col-md-12" style="margin-bottom: 10px; height: 300px;">
						<div class="card-header bg-success border">
						  Latest Nuttice
						</div>
						<div class="card-body">
							<ul class="list-group list-group-flush" style="border-top:0;">
								<li class="list-group-item"><a href="index.php">An item</a></li>
								<li class="list-group-item"><a href="index.php">An item</a></li>
								<li class="list-group-item"><a href="index.php">An item</a></li>
								<li class="list-group-item"><a href="index.php">An item</a></li>
								<li class="list-group-item"><a href="index.php">An item</a></li>
							</ul>
							<a href="nuttice.php" class="btn btn-primary float-right" style="margin-top: 5px;">All Nuttice</a>
						</div>
					</div>



					<div class="col-sm-12">
						<div class="card mb-3">
								<div class="card-body">
								  <h5 class="card-title">Addmission Section</h5>
								  <ul class="list-group list-group-flush" style="border-top:0;">
									<li class="list-group-item"><a href="addmission_from.php"><img src="img/list-border.png" style="margin-right:10px;">Addmission From</a></li>
									<li class="list-group-item"><a href="addmission_payment.php"><img src="img/list-border.png" style="margin-right:10px;">Addmission Payment</a></li>
									<li class="list-group-item"><a href="addmission_admit.php"><img src="img/list-border.png" style="margin-right:10px;">Addmission Admitcard</a></li>
									<li class="list-group-item"><a href="addmission_result.php"><img src="img/list-border.png" style="margin-right:10px;">Addmission Result</a></li>
									</ul>
							    </div>
						  </div>						
					</div>
					
					<div class="col-sm-12">
						<div class="card mb-3">
								<div class="card-body">
								  <h5 class="card-title">Authority</h5>
								  <ul class="list-group list-group-flush" style="border-top:0;">
									<li class="list-group-item"><a href="managing_commity.php"><img src="img/list-border.png" style="margin-right:10px;">Managing Comity</a></li>
									<li class="list-group-item"><a href="retaried_headmaster.php"><img src="img/list-border.png" style="margin-right:10px;">Retaired Headmaster</a></li>
									</ul>
							    </div>
						  </div>						
					</div>

					<div class="col-sm-12">
						<div class="card mb-3">
								<div class="card-body">
								  <h5 class="card-title">Teacher</h5>
								  <ul class="list-group list-group-flush" style="border-top:0;">
									<li class="list-group-item"><a href="teacher.php"><img src="img/list-border.png" style="margin-right:10px;">Current Teacher</a></li>
									<li class="list-group-item"><a href="retried_teacher.php"><img src="img/list-border.png" style="margin-right:10px;">Retaired Teacher</a></li>
									</ul>
							    </div>
						  </div>						
					</div>
					



				  </div>				


  
			</div>
			
		   <div class="col-md-3 float-right">					
					<?php include("inc/sidebar.php"); ?>
					  
			</div>

		</div>
		


		
		  
	</div>
<?php include("inc/footer.php"); ?>