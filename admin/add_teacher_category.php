<?php include_once("inc/head.php"); ?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $t_category  = $_POST['t_category'];

    $updatecategiry = $tsr->addTeacherCategory($t_category);
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
<?php 
        if (isset($updatecategiry)) {
            echo "<p>".$updatecategiry."</p>";
        }
?>                                   
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        
                                            <div class="row">
                                                <h3>Teacher Categoly List</h3>
                                                <div class="col-lg-12">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <input type="text" name="t_category" id="t_category" class="form-control">
                                                    </div>
                                                    
                                                    

                                                    <button class="btn btn-primary btn-block" name="submit" type="submit">Add Category</button>
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