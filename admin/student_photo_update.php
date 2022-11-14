<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">
    <?php
if (isset($_GET['std_id'])) {
    $std_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['std_id']);
    $getinfo = $std->getStudentInformationById($std_id);
}



if($getinfo){
while($row=$getinfo->fetch_assoc()){
?>

    <div class="content-wrap">

    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    
        <h3 class="text-center bg-success">Student Details</h3>

        <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatephoto'])) {
 $upstd = $cu_std->studentPhotoUpdate($_POST, $_FILES, $std_id);
}

if (isset($upstd)) {
    echo "<p>".$upstd."</p>";
}
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
                                                <label for="std_roll" class="col-sm-4 col-form-label">Student Photo</label>
                                                <div class="col-sm-8">
                                                <img id="imgPreview" src="" alt="Upload Student Photo" height="100" width="100"/>                                        
                                                <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                            </div>
                                                <div class="text-center">
                                                <?php if($ad_role == 'Admin' || $ad_role == 'IT Office'|| $ad_role == 'Addmission Office'){  ?> 
                                                <input type="submit" value="Update Photo"  name="updatephoto" class="btn btn-success col-3 rounded-0 py-2" style="float:left; margin-left:30px;">
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