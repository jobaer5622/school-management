<?php
include_once('../lib/Database.php');
include_once('../helpers/Format.php');


/**
 * Admin Profile Class
 */
class AdminProfile
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

            // Get admin data by id
	public function getAdminData($userId)
    {
        $query = "SELECT * FROM tbl_admin WHERE ad_id=$userId";
        $result = $this->db->select($query);
        return $result;
    }
            //Get all Admin Data
    public function getAllAdmin()
    {
        $query = "SELECT * FROM tbl_admin ORDER BY ad_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

            //Admin Profile Update
    public function adminUpdate($sata, $userId)
    {
        
        $ad_name    = $_POST['ad_name'];	
        $ad_index   = $_POST['ad_index'];	
        $ad_edu     = $_POST['ad_edu'];
        $ad_contact = $_POST['ad_contact'];
        $ad_email   = $_POST['ad_email'];	        
             
        if(empty($ad_name)or empty($ad_index) or empty($ad_edu)or empty($ad_contact)or empty($ad_email)){
            $msg = "<P class='alert alert-danger' role='alert'>Fields must not be empty!</p>";
            return $msg;
        }
        else{
            $query="update tbl_admin 
            SET 
            ad_name='$ad_name',
            ad_index='$ad_index',
            ad_edu='$ad_edu',
            ad_contact='$ad_contact',
            ad_email='$ad_email'	
                  
            WHERE ad_id = '$userId' ";
              $update = $this->db->update($query);
                   if($update){
                        $msg = "<P class='alert alert-success' role='alert'>Admin Data Updated Successfully</p>";
                        return $msg;
                    }	
         
        }
        
    }

            //Password Update
public function adminPasswordUpdate($data, $userId)
{
    $c_pasword     = $_POST['c_pasword'];	
    $n_password    = $_POST['n_password'];	
    $conf_pasword  = $_POST['conf_pasword'];
         
             
        if(empty($c_pasword)or empty($n_password) or empty($conf_pasword)){
            $msg = "<P class='alert alert-danger' role='alert'>Error!! Fields must not be empty!</p>";
            return $msg;
        }
        else if($n_password != $conf_pasword){
            $msg = "<P class='alert alert-danger' role='alert'>Error!! New Password and Confrom Password are Not Match</p>";
            return $msg;
        }
        else{;
            $query="update tbl_admin 
            SET 
            ad_password='$n_password'	
                  
            WHERE ad_id = '$userId'";
                $update = $this->db->update($query);
                   if($update){
                        $msg = "<P class='alert alert-success' role='alert'>Success!! Password Updated Successfully</p>";
                        return $msg;
                    }	
            
             }
}



}
?>