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
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $searchdata = $std->studentAdmitSearch($_POST);
}

if ($searchdata) {
    while ($result = $searchdata->fetch_assoc()) {
?>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="addmission_result_upload_done.php" method="post" enctype="multipart/form-data">                                        
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Application ID</label>
                                                <div class="col-sm-8">
                                                <input value="<?php echo $result['std_id']; ?>" type="text" class="form-control" id="application_id" name="application_id" readonly>
                                                </div>
                                            </div> 

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student name</label>
                                                <div class="col-sm-8">
                                                <input value="<?php echo $result['std_name']; ?>" type="text" class="form-control" id="std_name" name="std_name" readonly>
                                                </div>
                                            </div> 

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Father Name</label>
                                                <div class="col-sm-8">
                                                <input value="<?php echo $result['std_father_name']; ?>"  type="text" class="form-control" id="std_father_name" name="std_father_name" readonly>
                                                </div>
                                            </div> 

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Mother Name</label>
                                                <div class="col-sm-8">
                                                <input value="<?php echo $result['std_mother_name']; ?>"  type="text" class="form-control" id="std_mother_name" name="std_mother_name" readonly>
                                                </div>
                                            </div> 

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Addmission Result</label>
                                                <div class="col-sm-8">
                                                <select class="custom-select my-1 mr-sm-2" id="add_result" name="add_result">
                                                        <option selected>Choose Result</option>
                                                        <option value="Pass">Pass</option>
                                                        <option value="Fail">Fail</option>
                                                    </select>
                                                </div>
                                            </div> 

<?php } } ?>
                                                    
                                                    <button class="btn btn-primary btn-block" name="submitresult" type="submit">ADD Result</button>
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