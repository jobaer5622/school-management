<?php include("inc/header.php"); ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">

                <div class="container">
                    <div class="row" >
                        <div class="col-12" >
                                    <form action="payment_conformation.php" method="post" id="">
                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3>Addmission Payment System</h3>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">

                                            <div class="form-group row">
                                                <label for="std_class" class="col-sm-4 col-form-label">Year</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="std_exam_year" name="std_exam_year">
                                                        <option selected>Choose Exam Year</option>
<?php
     $getCat = $thset->showYearinFront();
     if ($getCat) {
         while ($result = $getCat->fetch_assoc()) {
?>
                                                        <option value="<?php echo $result['year']; ?>"><?php echo $result['year']; ?></option>
<?php } } ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Application ID</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="application_id" name="application_id" placeholder="Enter Your Application ID">
                                                </div>
                                            </div>                           


                
                                                <div class="text-center">
                                                    <input type="submit" name="submit" value="Search" class="btn btn-success btn-block rounded-0 py-2">
                                                </div>
                                            </div>
                
                                        </div>
                                    </form>
                
                
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

    
    
	