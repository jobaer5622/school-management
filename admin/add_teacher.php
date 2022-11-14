<?php include_once("inc/head.php"); ?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $addTeacher = $tsr->addTeacher($_POST, $_FILES);
}
?>
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
                                    <h4>Add Teacher</h4>
<?php 
        if (isset($addTeacher)) {
            echo "<p>".$addTeacher."</p>";
        }
?>  
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Teacher Name</label>
                                                        <input type="text" name="t_name" id="t_name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Index No</label>
                                                        <input type="text" name="t_index" id="t_index"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dagination</label>
                                                        <select class="form-control" name="t_degination" id="t_degination" >
                                                        <?php 
                                                            $getCat = $tsr->getAllTeacherCategory();
                                                                if ($getCat) {
                                                                    while ($result = $getCat->fetch_assoc()) {
                                                        ?>                                         

                                                        <option value="<?php echo $result['id']; ?>"><?php echo $result['t_category']; ?></option>
                                                        <?php } } ?>
														</select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Education Qualefication</label>
                                                        <input type="text" name="t_edu" id="t_edu"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact Number</label>
                                                        <input type="text" name="t_contact" id="t_contact"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>E-mail Address</label>
                                                        <input type="text" name="t_email" id="t_email"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Photo</label>
                                                        <input type="file"class="form-control-file" name="image" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control" name="t_status" id="t_status" >
															<option value="1">Current</option>
                                                            <option value="2">Retirement</option>
														</select>
                                                    </div>

                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">ADD Teacher</button>
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