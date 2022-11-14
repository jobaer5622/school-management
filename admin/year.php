<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>
    <?php 
if (isset($_GET['delId'])) {
    $delId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delId']);
    $delCat = $thset->delyear($delId);
}
 ?>

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
                            <div class="text-center bg-success" style="width:100%; font-size:22px;">Class Year</div><br/>
                                <?php 
                                    if (isset($delCat)) {
                                        echo $delCat;
                                    }
                                ?> 
                            <?php 
                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                    $addyear = $thset->addTeardata($_POST);
                                }

                                if (isset($addyear)) {
                                    echo "<p>".$addyear."</p>";
                                }
                            ?>
                                    <div class="col-lg-12">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Year</label>
                                                <input type="text" name="year" id="year" class="form-control">
                                            </div>
                                            <label>View in</label>
                                            <select class="form-select" name="front" id="front" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">back And Front</option>
                                                <option value="2">Back</option>
                                                </select>
                                                    
                                                    

                                            <button class="btn btn-primary btn-block" name="submit" type="submit">Add Year</button>
                                    </form>
                                </div>
                            </div>


                                <div class="bootstrap-data-table-panel">
                                    
                    <h2 class="text-center bg-success">Year List</h2>
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="20%">Sl</th>
                                                    <th width="20%">Name</th>
                                                    <th width="40%">View In</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

<?php 
     $getCat = $thset->getAllYear();
        if ($getCat) {
        $i=0;
            while ($result = $getCat->fetch_assoc()) {
                $i++; 
 ?>                                          

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $result['year']; ?></td>
                                                    <?php 
                                                    if($result['front'] == '1'){
                                                        $show = "Front and Back";
                                                    }else{
                                                        $show = "Back";
                                                    }
                                                    ?>                                                    
                                                    <th><?php echo $show; ?></th>
                                                    <th><a href="" class="btn btn-success">Edit</a>
                                                    <a onClick="return confirm('Are you sure you to Delete it');" class="btn btn-danger" href="?delId=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a>
                                                    </th>
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