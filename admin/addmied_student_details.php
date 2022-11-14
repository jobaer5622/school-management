<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">


    <div class="content-wrap">

    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    
        <h3 class="text-center bg-success">Student Details</h3>

        <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $upstd = $cu_std->studentInformationUpdate($_POST);
}

if (isset($upstd)) {
    echo "<p>".$upstd."</p>";
}
?>
        <?php
if (isset($_GET['std_id'])) {
    $std_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['std_id']);
    $getinfo = $std->getStudentInformationById($std_id);
}



if($getinfo){
while($row=$getinfo->fetch_assoc()){
?>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="../<?php echo $row['std_image']; ?>" alt="" />
                        </div>
                        
                      </div>
                      <div class="col-lg-8">

                      <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student ID</label>
                                                <div class="col-sm-8">
                                                <input type="text" readonly value="<?php echo $row['std_id']; ?>" class="form-control" id="std_id" name="std_id" placeholder="Enter Student Name">
                                                </div>
                                            </div> 

                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Addmit Date</label>
                                                <div class="col-sm-8">
                                                <input readonly type="text" value="<?php echo $row['std_add_date']; ?>" class="form-control" id="std_app_date" name="std_app_date" placeholder="Enter Student Name">
                                                </div>
                                            </div> 


                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Name</label>
                                                <div class="col-sm-8">
                                                <input   type="text" value="<?php echo $row['std_name']; ?>" class="form-control" id="std_name" name="std_name" placeholder="Enter Student Name">
                                                </div>
                                            </div>       
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Father Name</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_father_name']; ?>" id="std_father_name" name="std_father_name" placeholder="Enter Student Father Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Father NID No</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_father_nid']; ?>" id="std_father_nid" name="std_father_nid" placeholder="Enter Student Father NID No">
                                                </div>
                                            </div>                                            
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Father Date of Birth</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_father_dob']; ?>" id="std_father_dob" name="std_father_dob" placeholder="Enter Student Father Date of Birth">
                                                <p style="font-size:12px;">Format dd/mm/yyyy</p>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Mother Name</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_mother_name']; ?>" id="std_mother_name" name="std_mother_name" placeholder="Enter Student Mother Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Mother NID No</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_mother_nid']; ?>" id="std_mother_nid" name="std_mother_nid" placeholder="Enter Student Mother NID No">
                                                </div>
                                            </div>                                            
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Mother Date of Birth</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_mother_dob']; ?>" id="std_mother_dob" name="std_mother_dob" placeholder="Enter Student Mother Date of Birth">
                                                <p style="font-size:12px;">Format dd/mm/yyyy</p>
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Birth Cirtifecket No</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_berth_cer_no']; ?>" id="std_berth_cer_no" name="std_berth_cer_no" placeholder="Enter Student Birth Cirtifecket No">
                                                </div>
                                            </div>        
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Date of Birth</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_dob']; ?>" id="std_dob" name="std_dob" placeholder="Enter Student Date of Birth">
                                                <p style="font-size:12px;">Format dd/mm/yyyy</p>
                                                </div>
                                            </div>    
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Contact Number</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_contact']; ?>" id="std_contact" name="std_contact" placeholder="Enter Contact Number">
                                                </div>
                                            </div>      
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Present Address</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_present_address']; ?>" id="std_present_address" name="std_present_address" placeholder="Enter Your Present Address">
                                                </div>
                                            </div>       
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Permanent Address</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_parmanent_address']; ?>" id="std_parmanent_address" name="std_parmanent_address" placeholder="Enter Your Permanent Address">
                                                </div>
                                            </div>   
                                            
                                            <div class="form-group row">
                                                <label for="std_class" class="col-sm-4 col-form-label">Religion</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select my-1 mr-sm-2" id="std_rel" name="std_rel">
                                                        <option selected>Choose Religion</option>
                                                            <?php
                                                            $std_rel = $row['std_rel'];
                                                            if($std_rel == "Islam"){
                                                            ?>
                                                        <option selected value="Islam">Islam</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Cheritan">Cheritan</option>
                                                        <option value="Others">Others</option>


                                                        <?php }elseif($std_rel == "Hindu") { ?>
                                                        <option selected value="Hindu">Hindu</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Cheritan">Cheritan</option>
                                                        <option value="Others">Others</option>


                                                        <?php }elseif($std_rel == "Cheritan") { ?>
                                                        <option selected value="Cheritan">Cheritan</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="CheriIslamtan">Islam</option>
                                                        <option value="Others">Others</option>


                                                        <?php }elseif($std_rel == "Others") { ?>
                                                        <option selected value="Others">Others</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Cheritan">Cheritan</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <?php } ?>
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
                                                        <option 
                                                        
                                                        <?php if($result['class']== $row['std_class']){ ?>
                                                             selected
                                                       <?php } ?>
                                                        
                                                        
                                                        value="<?php echo $result['class']; ?>"> <?php echo $result['class']; ?></option>
                                                        
                                                    <?php } } ?>

                                                    </select>
                                                </div>
                                            </div> 

                                                 
                                            
                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Section</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_section']; ?>" id="std_section" name="std_section">
                                                </div>
                                            </div> 


                                            <div class="form-group row">
                                                <label for="std_roll" class="col-sm-4 col-form-label">Roll</label>
                                                <div class="col-sm-8">
                                                <input   type="text" class="form-control" value="<?php echo $row['std_roll']; ?>" id="std_roll" name="std_roll">
                                                </div>
                                            </div> 
                                             

                                           
                                                
                                                <div class="text-center">
                                                <?php if($ad_role == 'Admin' || $ad_role == 'IT Office'|| $ad_role == 'Addmission Office'){  ?> 
                                                <input type="submit" value="Updade"  name="update" class="btn btn-success col-3 rounded-0 py-2" style="float:left; margin-left:30px;">
                                                  <?php } ?>
                                                </div>
                                            </div>
                
                                        </div>
                                    </form>




                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php } } ?>   




    
    
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