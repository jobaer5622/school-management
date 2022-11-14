<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">

    <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitPayment'])) {
    $std_id  = $_POST['std_id'];
    $app_year  = $_POST['app_year'];
    $inv_no  = $_POST['inv_no'];

 //   $updatecategory = $tsr->updateTeacherCategory($t_category, $app_year);
 $studentName= $cu_std->getStudentnameById($std_id);

 if ($studentName) {
    while ($result = $studentName->fetch_assoc()) {
        $stdname =  $result['std_name'];
        $stdroll = $result['std_roll'];
        $stdclass = $result['std_class'];
        $stdsec = $result['std_section'];
    } }
}
?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                <div class="row" >
                        <div class="col-12" >

                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3>Student Payment Information</h3>
                                                </div>
                                                <p>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitPaymentConf'])) {
    $type_of_payment  = $_POST['type_of_payment'];
    $std_id  = $_POST['std_id'];
    $inv_no  = $_POST['inv_no'];
    $amount  = $_POST['amount'];
    $current_date = date('d/m/Y');
$payment_Done = $acc->AddmewPayment($std_id, $inv_no, $type_of_payment, $amount, $current_date);

}

if (isset($payment_Done)) {
    echo "<p>".$payment_Done."</p>";
}
?>
 </p>
                                                <form action="student_payment_conformation.php" method="post" id="">
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="form-group row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="10%">Student ID</td>
                                                        <td width="70%"><input value="<?php echo $std_id; ?>" readonly type="text" name="std_id" id="std_id"  class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%">Invoice No</td>
                                                        <td width="70%"><input value="<?php echo $inv_no; ?>" readonly  type="text" name="inv_no" id="inv_no"  class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%">Student Name</td>
                                                        <td width="70%"><input value="<?php echo $stdname; ?>" readonly  type="text" name="std_name" id="std_name"  class="form-control"></td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <td width="10%">Student Class</td>
                                                        <td width="70%"><input value="<?php echo $stdclass; ?>" readonly  type="text" name="std_roll" id="std_roll"  class="form-control"></td>
                                                    </tr>
                                                                                                        
                                                    <tr>
                                                        <td width="10%">Student Section</td>
                                                        <td width="70%"><input value="<?php echo $stdsec; ?>" readonly  type="text" name="std_roll" id="std_roll"  class="form-control"></td>
                                                    </tr>
                                                                                                        
                                                    <tr>
                                                        <td width="10%">Student Roll</td>
                                                        <td width="70%"><input value="<?php echo $stdroll; ?>" readonly  type="text" name="std_roll" id="std_roll"  class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="10%">Payment Type</td>
                                                        <td width="70%">
                                                        <select class="custom-select my-1 mr-sm-2" id="type_of_payment" name="type_of_payment">
                                                        <option selected value="0">Choose Payment Type</option>
                                                        <?php
                                                            $getCat = $thset->showAllPaymentType();
                                                            if ($getCat) {
                                                                while ($result = $getCat->fetch_assoc()) {
                                                        ?>
                                                        <option value="<?php echo $result['type_of_payment']; ?>"><?php echo $result['type_of_payment']; ?></option>
                                                        <?php } } ?>
                                                    </select>
                                                        </td>
                                                    </tr>                                                   
                                                    <tr>
                                                        <td width="10%">Amount</td>
                                                        <td width="70%"><input type="text" name="amount" id="amount"  class="form-control"></td>
                                                    </tr>

                                                </table>
                                                        
                                            </div>

                
                                                <div class="text-center">
                                                    <input name="submitPaymentConf" type="submit" value="Search" class="btn btn-success btn-block rounded-0 py-2">
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
                


    