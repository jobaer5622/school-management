<?php 
include('../lib/Session.php');
Session::checkLogin();
include_once('../lib/Database.php');
include_once('../helpers/Format.php');

 
/**
 * Adminlogin Class
 */
class Adminlogin
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

            //For Login Admin
    public function adminLogin($ad_username, $ad_password)
    {
        if($ad_username == "" || $ad_password == ""){
            $loginmsg = "<span style='color:red;font-size:18px;'>Fiend Must Not Empty</span>";
            return $loginmsg;
        }else{
                $query = "SELECT * FROM tbl_admin WHERE ad_username='$ad_username' and ad_password='$ad_password'";
                $result = $this->db->select($query);
                if ($result != false) {
                    $value = $result->fetch_assoc(); 
                    Session::set("login", true);
                    Session::set("ad_role", $value['ad_role']);
                    Session::set("ad_name", $value['ad_name']);
                    Session::set("ad_id", $value['ad_id']);
                    header("Location: index.php");
                } else { 
                    $loginmsg = "<span style='color:red;font-size:18px;'>Username or Password Not Matched !!</span>";
                    return $loginmsg;
            }
        }
		
    }

 


}