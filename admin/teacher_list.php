<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">


    <?php 
if (isset($_GET['delId'])) {
    $delId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delId']);
    $delCat = $tsr->delteacherbyId($delId);
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
                            <?php 
                if (isset($delCat)) {
                    echo $delCat;
                }
                 ?> 
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Id</th>
                                                    <th width="30%">Name</th>
                                                    <th width="20%">Position</th>
                                                    <th width="20%">Image</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

<?php 
     $getCat = $tsr->getAllTeacher();
        if ($getCat) {
        $i=0;
            while ($result = $getCat->fetch_assoc()) {
                $i++; 
 ?>                                          

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $result['t_name']; ?></td>
                                                    <td><?php echo $result['t_category']; ?></td>
                                                    <td><img height="50" width="50" src="../<?php echo $result['t_photo']; ?>" alt=""> </td>
                                                    <td>
                                                        <a href="edit_teacher.php?t_id=<?php echo $result['t_id']; ?>" class="btn btn-success"><span style="color:white">Edit</span></a>
                                                        <a onClick="return confirm('Are you sure you to Delete it');" class="btn btn-danger" href="?delId=<?php echo $result['t_id']; ?>"><span style="color:white">Delete</span></a>
                                                    </td>
                                                </tr>
<?php } } ?>


                                            </tbody>
                                        </table>
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