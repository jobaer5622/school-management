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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">



                            <div class="row">
                            <div class="text-center bg-success" style="width:100%; font-size:22px;">Class Add</div><br/>
                            <?php 
                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                    $addClass = $thset->addTeacher($_POST);
                                }

                                if (isset($addClass)) {
                                    echo "<p>".$addClass."</p>";
                                }
                            ?>
                                    <div class="col-lg-12">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Category</label>
                                                <input type="text" name="class" id="class" class="form-control">
                                            </div>
                                                    
                                                    

                                            <button class="btn btn-primary btn-block" name="submit" type="submit">Add Class</button>
                                    </form>
                                </div>
                            </div>


                                <div class="bootstrap-data-table-panel">
                                    
                    <h2 class="text-center bg-success">Class List</h2>
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="30%">Sl</th>
                                                    <th width="40%">Name</th>
                                                    <th width="30%"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

<?php 
     $getCat = $thset->getAllClass();
        if ($getCat) {
        $i=0;
            while ($result = $getCat->fetch_assoc()) {
                $i++; 
 ?>                                          

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $result['class']; ?></td>
                                                    <th></th>
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