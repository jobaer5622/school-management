<?php include("inc/header.php"); ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">

                <div class="container">
                    <div class="row" >
                        <div class="col-12" >
                                    
                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3>Addmission From</h3>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">                                           
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $addmission_request = $std->studentAddmission($_POST, $_FILES);
}
        if (isset($addmission_request)) {
            echo "<p>".$addmission_request."</p>";
        }
?>  
                            <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_name" name="std_name" placeholder="Enter Student Name">
                                                </div>
                                            </div>       
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Father Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_father_name" name="std_father_name" placeholder="Enter Student Father Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Father NID No</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_father_nid" name="std_father_nid" placeholder="Enter Student Father NID No">
                                                </div>
                                            </div>                                            
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Father Date of Birth</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_father_dob" name="std_father_dob" placeholder="Enter Student Father Date of Birth">
                                                <p style="font-size:12px;">Format dd/mm/yyyy</p>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Mother Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_mother_name" name="std_mother_name" placeholder="Enter Student Mother Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Mother NID No</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_mother_nid" name="std_mother_nid" placeholder="Enter Student Mother NID No">
                                                </div>
                                            </div>                                            
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Mother Date of Birth</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_mother_dob" name="std_mother_dob" placeholder="Enter Student Mother Date of Birth">
                                                <p style="font-size:12px;">Format dd/mm/yyyy</p>
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Birth Cirtifecket No</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_berth_cer_no" name="std_berth_cer_no" placeholder="Enter Student Birth Cirtifecket No">
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Date of Birth</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_dob" name="std_dob" placeholder="Enter Student Date of Birth">
                                                <p style="font-size:12px;">Format dd/mm/yyyy</p>
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Photo</label>
                                                <div class="col-sm-8">
                                                <img id="imgPreview" src="" alt="Upload Student Photo" height="100" width="100"/>                                        
                                                <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                            </div>      
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Contact Number</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_contact" name="std_contact" placeholder="Enter Contact Number">
                                                </div>
                                            </div>      
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Present Address</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_present_address" name="std_present_address" placeholder="Enter Your Present Address">
                                                </div>
                                            </div>       
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Permanent Address</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="std_parmanent_address" name="std_parmanent_address" placeholder="Enter Your Permanent Address">
                                                </div>
                                            </div>   
                                            
                                            <div class="form-group row">
                                                <label for="std_class" class="col-sm-4 col-form-label">Religion</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="std_rel" name="std_rel">
                                                        <option selected>Choose Religion</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Cheritan">Cheritan</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>    
                                            
                                            <div class="form-group row">
                                                <label for="std_class" class="col-sm-4 col-form-label">Class</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="std_class" name="std_class">
                                                        <option selected>Choose Class</option>
                                                        
<?php 
     $getCat = $thset->getAllClass();
        if ($getCat) {
            while ($result = $getCat->fetch_assoc()) {
 ?>
                                                        <option value="<?php echo $result['class']; ?>"><?php echo $result['class']; ?></option>
<?php } } ?>
                                                    </select>
                                                </div>
                                            </div> 
                                             

                                           
                                                
                                                <div class="text-center">
                                                    <input type="submit" value="Submit"  name="submit" class="btn btn-success col-5 rounded-0 py-2" style="float:left">
                                                    <input type="reset" value="Reset" class="btn btn-danger col-5 rounded-0 py-2" style="float:right">
                                                </div>
                                            </div>
                
                                        </div>
                                    </form>
                
                
                                </div>
                    </div>
                </div>    

  
			</div>
			
			<div class="col-md-3 float-right">					
				<?php include("inc/sidebar.php"); ?>					  
			</div>

		</div>
		


		
		  
	</div>
	<?php include("inc/footer.php"); ?>
<script>
$(document).ready(()=>{
      $('#image').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });

</script>
    
    
	