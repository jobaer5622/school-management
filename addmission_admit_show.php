<?php include("inc/header.php"); ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-12 float-left border">
            <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $addmission_admit = $std->studentAdmitSearch($_POST);


if ($addmission_admit) {
    while ($result = $addmission_admit->fetch_assoc()) {
?>
                <div style="height:500px; width:900px;border:1px solid green;margin:0 auto;" id="ele1">
                <div class="col-12" style="margin-bottom:10px;">
                    <a href="index.php"><img class="header-image" height="100" src="img/slideshow/01.jpg" width="100%" alt="Image Not Found"></a>
                </div>
                <p class="admit_title">Admit Card - <?php echo date('Y'); ?></p>	   
                    <div class="col-12">
                    <div class="col-6 left_panel">
                    <table class="table table-striped" border="0">
                            <tr>
                                <td width="150">&nbsp;&nbsp;Student ID </td>
                                <td width="20">:</td>
                                <td width="230"><?php echo $result['std_id']; ?></td>
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
                                <td>&nbsp;&nbsp;Religion</td>
                                <td>:</td>
                                <td><?php echo $result['std_rel']; ?></td>
                            </tr> 
                            <tr>
                                <td>&nbsp;&nbsp;Class</td>
                                <td>:</td>
                                <td><?php echo $result['std_class']; ?></td>
                            </tr>              
                        </table>                   
                    </div>
                    <div class="col-4 right_panel">
                        <img src="<?php echo $result['std_image']; ?>" alt="">
                    </div>
                    </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <div class="col-4 right_panel">Student Signature</div>

                </div>    
<?php } }else{ echo "Not Found";} } ?>
                <button class="btn btn-success float-left" onclick="jQuery('#ele1').print()">
                Print Admit Card
                </button> 
                

                
			</div>


		</div>
		


		
		  
	</div>
	<?php include("inc/footer.php"); ?>

    <script type='text/javascript'>
       
        jQuery(function($) { 'use strict';
            try {
                var original = document.getElementById('canvasExample');
                original.getContext('2d').fillRect(20, 20, 120, 120);
            } catch (err) {
                console.warn(err)
            }
        });
        //]]>
        </script>

    
    
	