
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

                                                
                                                <?php
                                                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitresult'])) {

                                                        $addresult = $std->studenrAddmissionResultUpload($_POST);
                                                    }
                                                    if(isset($addresult)){
                                                        echo "<p>".$addresult."</p>";
                                                    }


                                                    ?>
                                                <a class="btn btn-primary btn-block" href="addmission_result.php">New Result</a>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        








    </div>
    <?php include_once("inc/footer.php"); ?>