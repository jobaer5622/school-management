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
                                    <h4>Change Pasword</h4>
 <?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
         $updateAdminPassword = $ad->adminPasswordUpdate($_POST, $userId);
     }
     
     if (isset($updateAdminPassword)) {
         echo "<p style='text-align: center;''>".$updateAdminPassword."</p>";
     } 
?>                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input type="text" name="c_pasword" id="c_pasword" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="text" name="n_password" id="n_pasword"  class="form-control">
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label>Confrom Password</label>
                                                        <input type="text" name="conf_pasword" id="conf_pasword"  class="form-control">
                                                    </div>
                                                    

                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Update</button>
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