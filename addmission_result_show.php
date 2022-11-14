<?php include("inc/header.php"); ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-12 float-left border">

                <div style="height:1460px; width:900px;border:1px solid green;margin:0 auto;" id="ele1">
<div class="col-12" style="overflow:hidden">
<p class="addmission_title">Addmission Office Copy</p>
                <div class="col-12" style="margin-bottom:10px;">
                    <a href="index.php"><img class="header-image" height="100" src="img/slideshow/01.jpg" width="100%" alt="Image Not Found"></a>
                </div>	   
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchResult'])) {
    $std_id               = $_POST['application_id'];
    $upstd = $std->getStudentInformationById($std_id);

    if ($upstd) {
        while ($result = $upstd->fetch_assoc()) {
?>
                <p class="admit_title">Addmission Result</p>	   
                    <div class="col-9 left_panel">
                    <table class="table table-striped" border="0">
                            <tr>
                                <td width="250">&nbsp;&nbsp;Student ID </td>
                                <td width="20">:</td>
                                <td width="230"><?php echo $result['std_id']; ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;Student Name </td>
                                <td>:</td>
                                <td><?php echo $result['std_name']; ?></td>
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
                            <tr>
                                <td>&nbsp;&nbsp;Result</td>
                                <td>:</td>
                                <td><?php echo $result['add_result']; ?></td>
                            </tr>               
                        </table>                   
                    </div>
                    <div class="col-3 right_panel">
                        <img src="<?php echo $result['std_image']; ?>" alt="Not Found">
                    </div>                 
                    
                    <div class="col-12 attacement">
                    
						<p class="">Attacement</p>	
							<ul class="list-group list-group-flush" style="border-top:0;">
								<li class="list-group-item"><img src="img/list-border.png" style="margin-right:10px;">PP Size Photo 2 Copy</li>
                                <li class="list-group-item"><img src="img/list-border.png" style="margin-right:10px;">Student Birth Cirteficket Photocopy</li>
                                <li class="list-group-item"><img src="img/list-border.png" style="margin-right:10px;">Father and Mother NID and Birth Cirteficket Photocopy</li>
								<li class="list-group-item"><img src="img/list-border.png" style="margin-right:10px;">Result Card of Last Class Final Exam</li>
							</ul>				
					</div> 
</div>
<br/><br/>

<p>&nbsp;&nbsp;&nbsp;&nbsp; Student Signature
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Girduan Signature
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Addmission Officer Signature
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Headmaster Signature
</p>

<div class="brake"></div>
<br/>
<div class="col-12" style="overflow:hidden">
                    <p class="addmission_title">Student  Copy</p>
                <div class="col-12" style="margin-bottom:10px;">
                    <a href="index.php"><img class="header-image" height="100" src="img/slideshow/01.jpg" width="100%" alt="Image Not Found"></a>
                </div>	   

                <p class="admit_title">Addmission Result</p>	   
                    <div class="col-9 left_panel">
                    <table class="table table-striped" border="0">
                            <tr>
                                <td width="250">&nbsp;&nbsp;Student ID </td>
                                <td width="20">:</td>
                                <td width="230"><?php echo $result['std_id']; ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;Student Name </td>
                                <td>:</td>
                                <td><?php echo $result['std_name']; ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;Class</td>
                                <td>:</td>
                                <td><?php echo $result['std_class']; ?></td>
                            </tr>  
                            <tr>
                                <td>&nbsp;&nbsp;Section</td>
                                <td>:</td>
                                <td></td>
                            </tr>   
                            <tr>
                                <td>&nbsp;&nbsp;Roll</td>
                                <td>:</td>
                                <td></td>
                            </tr>                               
                            <tr>
                                <td>&nbsp;&nbsp;fast Class Date</td>
                                <td>:</td>
                                <td></td>
                            </tr>               
                        </table>                   
                    </div>
                    <div class="col-3 right_panel">
                        <img src="<?php echo $result['std_image']; ?>" alt="">
                    </div>   
                                   
                    </div>        


<p style="float:right">Addmission Officer Signature&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please bring it at fast class</p>  


<?php } } } ?>

                    




                </div>    

                <button class="btn btn-success float-left" onclick="jQuery('#ele1').print()">
                Print Result
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

    
    
	