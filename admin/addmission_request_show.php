<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $app_year         = $_POST['app_year'];
    $std_add_payment  = $_POST['std_add_payment'];

    $search_student = $std->getaddmissionrequest($app_year, $std_add_payment);
}
?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <h2>Addmission Request - <?php
                                    if($std_add_payment == '0'){
                                        echo "Payment not Done";
                                    }else{
                                        echo "Payment Done";
                                    }
                                ?>
                                </h2>

                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <form action=""  method="get">
                                        <table id="bootstrap-data-table-export" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Id</th>
                                                    <th width="20%">Application ID</th>
                                                    <th width="20%">Name</th>
                                                    <th width="20%">Father Name</th>
                                                    <th width="20%">Class</th>
                                                    <th width="20%">Image</th>
                                                    <th width="20%">Massage</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

<?php 
        if ($search_student) {
        $i=0;
            while ($result = $search_student->fetch_assoc()) {
                $i++; 
 ?>                                          

                                                <tr>
                                                    <td>1</td>
                                                    <td><?php echo $result['std_id']; ?></td>
                                                    <td><?php echo $result['std_name']; ?></td>
                                                    <td><?php echo $result['std_father_name']; ?></td>
                                                    <td><?php echo $result['std_class']; ?></td>
                                                    <td><img height="50" width="50" src="../<?php echo $result['std_image']; ?>" alt=""> </td>
                                                    <td><input type="checkbox" class="form-check-input" name="chdata[]" value="<?php $result['std_id']; ?>"></td>
                                                    <td>
                                                        <a href="student_details.php?std_id=<?php echo $result['std_id']; ?>" class="btn btn-success"><span style="color:white">Details</span></a>
                                                    </td>
                                                </tr>
<?php } } ?>


                                            </tbody>
                                        </table>
            </form>
            <input type="submit" name="submit" value="Send Massage" class="btn btn-success rounded-0 py-2"/>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

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