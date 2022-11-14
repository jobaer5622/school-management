<?php include_once("inc/head.php"); ?>

    <?php include_once("inc/sidebar.php"); ?>
    <!-- /# sidebar -->

    <div class="header">
    <?php include_once("inc/header.php"); ?>
    </div>


    <div class="content-wrap">
<?php
$getAdmin = $ad->getAdminData($userId);
if($getAdmin){
while($row=$getAdmin->fetch_assoc()){
?>
    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                  <h3 class="text-center bg-success">Admin Profile </h3>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="../<?php echo $row['ad_image']; ?>" alt="" />
                        </div>
                        
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name"><?php echo $row['ad_name']; ?></div>
                        <div class="user-job-title"><?php echo $row['ad_degination']; ?></div>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <div class="phone-content">
                                  <span class="contact-title">Phone:</span>
                                  <span class="phone-number"><?php echo $row['ad_contact']; ?> </span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">E-mail:</span>
                                  <span class="mail-address"><?php echo $row['ad_email']; ?></span>
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Education:</span>
                                  <span class="contact-email"><?php echo $row['ad_edu']; ?></span>
                                </div>
                                <div class="website-content">
                                  <span class="contact-title">Index:</span>
                                  <span class="contact-website"><?php echo $row['ad_index']; ?></span>
                                </div>
                                <div class="skype-content">
                                  <span class="contact-title">Username:</span>
                                  <span class="contact-skype"><?php echo $row['ad_username']; ?></span>
                                </div>
                                <div class="website-content">
                                  <span class="contact-title">Role:</span>
                                  <span class="contact-website"><?php echo $row['ad_role']; ?></span>
                                </div>
                                <div class="website-content">
                                  <span class="contact-title"><a href="change_password.php" class="btn btn-success"><span style="color:white">Change Password</span></a></span>
                                  <span class="contact-website"><a href="edit_profile.php?myid=<?php echo $row['ad_id']; ?>" class="btn btn-success"><span style="color:white">Edit Profile</span></a></span>
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
          </div>
<?php } } ?>    
    </div>
    <?php include_once("inc/footer.php"); ?>