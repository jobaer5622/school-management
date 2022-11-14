<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">

<?php
    $search_student = $cu_std->getStudentList();
?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <h2>Student List</h2>

                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <form action=""  method="get">
                                        <table id="bootstrap-data-table-export" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Id</th>
                                                    <th width="10%">Student ID</th>
                                                    <th width="20%">Name</th>
                                                    <th width="10%">Class</th>
                                                    <th width="10%">Section</th>
                                                    <th width="10%">Roll</th>
                                                    <th width="40%">Action</th>
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
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $result['std_id']; ?></td>
                                                    <td><?php echo $result['std_name']; ?></td>
                                                    <td><?php echo $result['std_class']; ?></td>
                                                    <td><?php echo $result['std_section']; ?></td>
                                                    <td><?php echo $result['std_roll']; ?></td>
                                                    <td>
                                                        <a href="addmied_student_details.php?std_id=<?php echo $result['std_id']; ?>" class="btn btn-success"><span style="color:white">Details</span>
                                                         <a href="student_photo_update.php?std_id=<?php echo $result['std_id']; ?>" class="btn btn-success"><span style="color:white">Photo Update</span></a>
                                                    </td>
                                                </tr>
<?php } } ?>


                                            </tbody>
                                        </table>
            </form>
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