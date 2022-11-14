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
                                    <form target="_blank" action="admit_card_generate.php" method="post" id="">
                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3>Admid Card Generate</h3>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">

                                            <div class="form-group row">
                                                <label for="std_class" class="col-sm-4 col-form-label">Class</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="std_class" name="std_class">
                                                        <option selected>Choose Class</option>
                                                        <?php
                                                            $getclass = $thset->getAllClass();
                                                            if ($getclass) {
                                                                while ($result = $getclass->fetch_assoc()) {
                                                        ?>
                                                        <option value="<?php echo $result['class']; ?>"><?php echo $result['class']; ?></option>
                                                        <?php } } ?>
                                                    </select>
                                                </div>

                                                <label for="std_class" class="col-sm-4 col-form-label">Select Exam Name</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="exam_name" name="exam_name">
                                                        <option selected>Sylect Exam Name</option>
                                                        <?php 
                                                        $getCat = $thset->getAllExam();
                                                            if ($getCat) {
                                                                while ($result = $getCat->fetch_assoc()) {
                                                        ?>                                     
                                                        <option value="<?php echo $result['exam_name']; ?>"><?php echo $result['exam_name']; ?> </option>
                                                        <?php } } ?>

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
                


    