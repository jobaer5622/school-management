<?php include_once("inc/head.php"); ?>
<?php 
if (isset($_GET['editcat'])) {
    $editcat = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['editcat']);
    $getinfo = $tsr->getTeacherCategorybyId($editcat);
}
 ?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $t_category  = $_POST['t_category'];

    $updatecategory = $tsr->updateTeacherCategory($t_category, $editcat);
}
?>
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
                                    <h4>Update Teacher Category</h4>
<?php 
        if (isset($updatecategory)) {
            echo "<p>".$updatecategory."</p>";
        }
?>                                   
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                    <?php 
        if ($getinfo) {
        $i=0;
            while ($result = $getinfo->fetch_assoc()) {
                $i++; 
 ?>                                       
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <input value="<?php echo $result['t_category']; ?>" type="text" name="t_category" id="t_category" class="form-control">
                                                    </div>
                                                    
                                                    
<?php } } ?>
                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Update Category</button>
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