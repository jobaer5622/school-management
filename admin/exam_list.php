
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
                        <div class="text-center bg-success" style="width:100%; font-size:22px;">Class Exam Name</div><br/>
                        <?php 
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                $addExam = $thset->addExam($_POST);
                            }

                            if (isset($addExam)) {
                                echo "<p>".$addExam."</p>";
                            }
                        ?>
                                <div class="col-lg-12">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Exam name</label>
                                            <input type="text" name="exam_name" id="exam_name" class="form-control">
                                        </div>
                                                
                                                

                                        <button class="btn btn-primary btn-block" name="submit" type="submit">Add Exam</button>
                                </form>
                            </div>
                        </div>


                            <div class="bootstrap-data-table-panel">
                                
                <h2 class="text-center bg-success">Exam List</h2>
                <?php 
if (isset($_GET['upId'])) {
    $upId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['upId']);
    $delCat = $thset->updateExamInformation($upId);
}
 ?>
 <?php 
    if (isset($delCat)) {
        echo $delCat;
    }
?> 
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="text-center table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sl</th>
                                                <th width="40%">Exam Name</th>
                                                <th width="20%">View Type</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php 
 $getCat = $thset->getAllExam();
    if ($getCat) {
    $i=0;
        while ($result = $getCat->fetch_assoc()) {
            $i++; 
?>                                          

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $result['exam_name']; ?></td>
                                                <?php
                                                if($result['exam_status'] == '0'){
                                                    $data = "Only Backend";
                                                }else{
                                                    $data = "Backend And Frontend";
                                                }
                                                
                                                ?>
                                                <td><?php echo $data; ?></td>
                                                <th><a href="?upId=<?php echo $result['id']; ?>" class="btn btn-primary btn-block" name="submit" type="submit">View Frontend</a></th>
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