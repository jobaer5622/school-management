<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">
<?php
$rnumber = rand(00000,99999);
?>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                <div class="row" >
                        <div class="col-12" >
                                    <form action="student_payment_conformation.php" method="post" id="">
                                        <input type="hidden" name="inv_no" id="inv_no" value="<?php echo $rnumber; ?>"  class="form-control">
                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3>Make Student Payment</h3>
                                                </div>

                                            </div>
                                            <div class="card-body p-3">
                                            <div class="form-group row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="10%">Student ID</td>
                                                        <td width="70%"><input type="text" name="std_id" id="std_id"  class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%">Year</td>
                                                        <td width="70%">
                                                        <select class="custom-select my-1 mr-sm-2" id="app_year" name="app_year">
                                                        <option selected>Choose Exam Year</option>
                                                        <?php
     $getCat = $thset->showYearinFront();
     if ($getCat) {
         while ($result = $getCat->fetch_assoc()) {
?>
                                                        <option value="<?php echo $result['year']; ?>"><?php echo $result['year']; ?></option>
<?php } } ?>
                                                    </select>



                                                        </td>
                                                    </tr>
                                                </table>
                                                        
                                            </div>

                
                                                <div class="text-center">
                                                    <input name="submitPayment" type="submit" value="Search" class="btn btn-success btn-block rounded-0 py-2">
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
                


    