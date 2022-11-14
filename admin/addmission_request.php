<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                <div class="row" >
                        <div class="col-12" >
                                    <form action="addmission_request_show.php" method="post" id="">
                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3>Addmission Request Search by Year</h3>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">

                                            <div class="form-group row">
                                                <label for="std_class" class="col-sm-4 col-form-label">Year</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="app_year" name="app_year">
                                                        <option selected>Choose Addmission Year</option>
                                                        <?php
     $getCat = $thset->showYearinFront();
     if ($getCat) {
         while ($result = $getCat->fetch_assoc()) {
?>
                                                        <option value="<?php echo $result['year']; ?>"><?php echo $result['year']; ?></option>
<?php } } ?>
                                                    </select>
                                                </div>

                                                <label for="std_class" class="col-sm-4 col-form-label">Select Payment Status</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="std_add_payment" name="std_add_payment">
                                                        <option selected>Sylect Payment Status</option>
                                                        <option value="0">Not Payment</option>
                                                        <option value="1">Payment</option>
                                                    </select>
                                                </div>
                                            </div> 

                
                                                <div class="text-center">
                                                    <input name="submit" type="submit" value="Search" class="btn btn-success btn-block rounded-0 py-2">
                                                </div>
                                            </div>
                
                                        </div>
                                    </form>
                
                
                                </div>
                    </div>

                </section>
            </div>
        </div>
    </div>




    
    
    </div>
    <?php include_once("inc/footer.php"); ?>
    <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/buttons.flash.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/pdfmake.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/datatables-init.js"></script>
                


    