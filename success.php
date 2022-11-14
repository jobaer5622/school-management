<?php
spl_autoload_register(function ($class) {
    include_once "cls/".$class.".php";
});

$std = new Student();

if (isset($_GET['application_id'])) {
    $application_id  = $_GET['application_id'];
}  
$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("jobae62827a672491c");
$store_passwd=urlencode("jobae62827a672491c@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;
} else {

	echo "Failed to connect with SSLCOMMERZ";
} 
?>
   <?php include("inc/header.php"); ?>


<div class="main_content">
    <div class="row">
        <div class="col-md-12 float-left border">
<?php 


?>
            <div style="height:600px; width:900px;border:1px solid green;margin:0 auto;" id="ele1">
            <form action="payment.php" method="post" id="">
            <p class="admit_title">Addmission Payment Details</p>	   
                <div class="col-12">
                <div class="col-12 ">
                <table class="table table-striped" border="0">
                        <tr>
                            <td width="20">&nbsp;&nbsp;Student ID </td>
                            <td width="20">:</td>
                            <td width="130"><?php echo $application_id; ?></td>
                        </tr>
                        <tr>
                            <td width="20">&nbsp;&nbsp;Tranjection ID </td>
                            <td width="20">:</td>
                            <td width="130"><?php echo $tran_id; ?></td>
                        </tr>                        
                        <tr>
                            <td width="20">&nbsp;&nbsp;Payment Amount </td>
                            <td width="20">:</td>
                            <td width="130"><?php echo $amount; ?></td>
                        </tr>                       
                        <tr>
                            <td width="20">&nbsp;&nbsp;Payment Status </td>
                            <td width="20">:</td>
                            <td width="130">Done</td>
                        </tr>
                                
                    </table>                   
                </div>
                </div>
                        </form>

            </div>    
<?php 
    $pmt_conf = $std->paymentDone($application_id, $tran_id);	
?>
            
            

            
        </div>


    </div>
    


    
      
</div>
<?php include("inc/footer.php"); ?>