<?php include("inc/header.php"); ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-12 float-left border">
            <?php 
            $amount = 160;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $addmission_payment_conformation = $std->studentAddmissionPayment($_POST);

if ($addmission_payment_conformation) {
    while ($result = $addmission_payment_conformation->fetch_assoc()) {
?>
                <div style="height:600px; width:900px;border:1px solid green;margin:0 auto;" id="ele1">
                <form action="payment.php" method="post" id="">
                <p class="admit_title">Addmission Payment Details</p>	   
                    <div class="col-12">
                    <div class="col-12 ">
                    <table class="table table-striped" border="0">
                            <tr>
                                <td width="150">&nbsp;&nbsp;Student ID </td>
                                <td width="20">:</td>
                                <td width="230"><input type="text" class="form-control" id="application_id" name="application_id" value="<?php echo $result['std_id']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td width="150">&nbsp;&nbsp;Application Year</td>
                                <td width="20">:</td>
                                <td width="230"><input type="text" class="form-control" id="app_year" name="app_year" value="<?php echo $result['app_year']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td width="150">&nbsp;&nbsp;Student Name </td>
                                <td width="20">:</td>
                                <td width="230"><?php echo $result['std_name']; ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;Father Name </td>
                                <td>:</td>
                                <td><?php echo $result['std_father_name']; ?></td>
                            </tr>     
                            <tr>
                                <td>&nbsp;&nbsp;Mother Name </td>
                                <td>:</td>
                                <td><?php echo $result['std_mother_name']; ?></td>
                            </tr>  
                            <tr>
                                <td>&nbsp;&nbsp;Class</td>
                                <td>:</td>
                                <td><?php echo $result['std_class']; ?></td>
                            </tr>  
                            <tr>
                                <td>&nbsp;&nbsp;Payment Amount</td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="amount" name="amount" value="<?php echo $amount; ?>" readonly></td>
                            </tr>                              
                            <tr>
                                <td>&nbsp;&nbsp;Payment Status</td>
                                <td>:</td>
                                <?php
                                if($result['std_add_payment'] == '0'){
                                    $status = 'Not Done';
                                }else{
                                    $status = 'Done';
                                }
                                ?>
                                <td><?php echo $status; ?></td>
                            </tr>                             
                            <tr>
                                <td>&nbsp;&nbsp;</td>
                                <td></td>
                                <td><button type="submit" class="btn btn-success btn-block" name="submit" id="submit">Payment</button></td>
                            </tr>            
                        </table>                   
                    </div>
                    </div>
                            </form>

                </div>    
<?php } }else{ echo "Not Found";} } ?>
                
                

                
			</div>


		</div>
		


		
		  
	</div>
	<?php include("inc/footer.php"); ?>