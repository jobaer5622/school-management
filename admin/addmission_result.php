<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">


    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add Addmission Result</h4>

                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="addmission_result_upload.php" method="post" enctype="multipart/form-data">
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
                                                    
                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Search</button>
                                              </form>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        








    </div>
    <?php include_once("inc/footer.php"); ?>