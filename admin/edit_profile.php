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
                                    <h4>Edit User Profile</h4>   
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
         $updateAdmin = $ad->adminUpdate($_POST, $userId);
     }

     if (isset($updateAdmin)) {
         echo "<p style='text-align: center;''>".$updateAdmin."</p>";
     } 
?>                               
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
<?php
    $getAdmin = $ad->getAdminData($userId);
    if($getAdmin){
    while($row=$getAdmin->fetch_assoc()){
?>                                             <div class="row">
                                                <div class="col-lg-12">
                                                <form action="edit_profile.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="ad_name" id="ad_name" value="<?php echo $row['ad_name']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Index No</label>
                                                        <input type="text" name="ad_index" id="ad_index" value="<?php echo $row['ad_index']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Education Qualefication</label>
                                                        <input type="text" name="ad_edu" id="ad_edu" value="<?php echo $row['ad_edu']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact Number</label>
                                                        <input type="text" name="ad_contact" id="ad_contact" value="<?php echo $row['ad_contact']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>E-mail Address</label>
                                                        <input type="text"  name="ad_email" id="ad_email" value="<?php echo $row['ad_email']; ?>" class="form-control">
                                                    </div>

                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Update Profile</button>
                                              </form>
        <?php } } ?>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        








    </div>
    <?php include_once("inc/footer.php"); ?>