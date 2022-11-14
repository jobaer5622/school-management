<?php include_once("inc/head.php"); ?>
<?php 
if (isset($_GET['t_id'])) {
    $t_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['t_id']);
    $getinfo = $tsr->getTeacherInfo($t_id);
}
 ?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $uptsr = $tsr->editTeacherInfo($_POST, $_FILES, $t_id);
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
        if (isset($uptsr)) {
            echo "<p>".$uptsr."</p>";
        }
?>  
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
<?php 
        if ($getinfo) {
        $i=0;
            while ($result = $getinfo->fetch_assoc()) {
                $i++; 
 ?>                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Teacher Name</label>
                                                        <input value="<?php echo $result['t_name']; ?>" type="text" name="t_name" id="t_name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Index No</label>
                                                        <input value="<?php echo $result['t_index']; ?>" type="text" name="t_index" id="t_index"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dagination</label>
                                                        <select class="form-control" name="t_degination" id="t_degination" >
                                                            <?php 
                                                            $getCat = $tsr->getAllTeacherCategory();
                                                            if ($getCat) {
                                                                while ($data = $getCat->fetch_assoc()) {
                                                                    ?>
                                                                        <option 
                                                                        <?php 
                                                                        if ($result['t_degination'] == $data['id']) {
                                                                            ?>
                                                                            selected = "selected"
                                                                        <?php
                                                                        } ?>
                                                                        value="<?php echo $data['id']; ?>"><?php echo $data['t_category']; ?></option>
                                                                        <?php
                                                                }
                                                            } 
                                                            ?> 
														</select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Education Qualefication</label>
                                                        <input value="<?php echo $result['t_edu']; ?>" type="text" name="t_edu" id="t_edu"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact Number</label>
                                                        <input value="<?php echo $result['t_contact']; ?>" type="text" name="t_contact" id="t_contact"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>E-mail Address</label>
                                                        <input value="<?php echo $result['t_email']; ?>" type="text" name="t_email" id="t_email"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Photo</label>
                                                        <img height="50" width="50" src="../<?php echo $result['t_photo']; ?>" alt="">



                                                        <input type="file"class="form-control-file" name="image" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control" name="t_status" id="t_status" >  
                                                            <?php
                                                            if($result['t_status'] == 1){
                                                            ?>                                                      
															<option selected = "selected" value="1">Current</option>
                                                            <option value="2">Retirement</option>
                                                            <?php }
                                                            else if($result['t_status'] == 2){
                                                             ?>
                                                            <option selected = "selected" value="2">Retirement</option>
                                                            <option value="1">Current</option>
                                                            <?php } ?>
														</select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Retirement Date</label>
                                                        <input value="<?php echo $result['t_retried_date']; ?>" type="text" name="t_retried_date" id="t_retried_date"  class="form-control">
                                                        <p>Format DD/MM/YYYY</p>
                                                    </div>

                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Update Teacher</button>
                                              </form>
                                                </div>
<?php } } ?>  
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        








    </div>
    <?php include_once("inc/footer.php"); ?>