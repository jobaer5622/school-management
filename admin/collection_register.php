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
                                    <h4>Daily Collection Register</h4>

                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="collection_register_show.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group row">
                                            </div> 
                                            

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Application ID</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="date" name="date" placeholder="Enter date Format: DD/MM/YYYY">
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