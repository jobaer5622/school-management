<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');



/**
 * Student Class
 */
class Student
{

public function __construct()
{
    $this->db = new Database();
    $this->fm = new Format();
}
    //Get Student List
public function getStudentList()
{
    $year = date('Y');
    $query = "SELECT * FROM tbl_student WHERE std_status='2' AND app_year = '$year'";
    $result = $this->db->select($query);
    return $result;
}

    //Student Information Update
public function studentInformationUpdate($data){
    $std_name               = $this->fm->validation($data['std_name']);
    $std_father_name               = $this->fm->validation($data['std_father_name']);
    $std_father_nid               = $this->fm->validation($data['std_father_nid']);
    $std_father_dob               = $this->fm->validation($data['std_father_dob']);
    $std_mother_name               = $this->fm->validation($data['std_mother_name']);
    $std_mother_nid               = $this->fm->validation($data['std_mother_nid']);
    $std_mother_dob               = $this->fm->validation($data['std_mother_dob']);
    $std_berth_cer_no               = $this->fm->validation($data['std_berth_cer_no']);
    $std_dob               = $this->fm->validation($data['std_dob']);
    $std_contact               = $this->fm->validation($data['std_contact']);
    $std_present_address               = $this->fm->validation($data['std_present_address']);
    $std_parmanent_address               = $this->fm->validation($data['std_parmanent_address']);
    $std_rel               = $this->fm->validation($data['std_rel']);
    $std_class               = $this->fm->validation($data['std_class']);
    $std_section               = $this->fm->validation($data['std_section']);
    $std_roll               = $this->fm->validation($data['std_roll']);
    $std_id               = $this->fm->validation($data['std_id']);




    $query = "UPDATE tbl_student
    SET
    std_name = '$std_name',
    std_father_name = '$std_father_name',
    std_father_nid = '$std_father_nid',
    std_father_dob = '$std_father_dob',
    std_mother_name = '$std_mother_name',
    std_mother_nid = '$std_mother_nid',
    std_mother_dob = '$std_mother_dob',
    std_berth_cer_no = '$std_berth_cer_no',
    std_dob = '$std_dob',
    std_contact = '$std_contact',
    std_present_address = '$std_present_address',
    std_parmanent_address = '$std_parmanent_address',
    std_rel = '$std_rel',   
    std_class = '$std_class',    
    std_section = '$std_section',    
    std_roll = '$std_roll'

    WHERE std_id = '$std_id'";
        $updated_row = $this->db->update($query);  

        if ($updated_row) {
            $msg = "<p class='alert alert-success'>Student Data Update  Successfully Complete.</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Student Data  not Update.</p>";
            return $msg;
        }



}

    //Student Photo Update
public function studentPhotoUpdate($data, $file, $std_id){
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../upload/".$unique_image;
    $uploaded_image2 = "upload/".$unique_image;

    if (empty($file_name)) {
        echo "<p class='alert alert-danger'>Please Select any Image !</p>";
    } elseif ($file_size >4048567) {
        echo "<p class='alert alert-danger'>Image Size should be less then 4MB! </p>";
    } elseif (in_array($file_ext, $permited) === false) {
        echo "<p class='error'>You can upload only:-".implode(', ', $permited)."</p>";

    } else{
        move_uploaded_file($file_temp, $uploaded_image);
    $query = "UPDATE tbl_student
    SET
    std_image = '$uploaded_image2'

    WHERE std_id = '$std_id'";

        $updated_row = $this->db->update($query);  

        if ($updated_row) {
            $msg = "<p class='alert alert-success'>Student Photo Update  Successfully.</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Student Photo  not Update.</p>";
            return $msg;
        }

    }
}

public function getStudentByClass($std_class){
    $query = "SELECT * FROM tbl_student WHERE std_class='$std_class'";
    $result = $this->db->select($query);
    return $result;
}

public function getStudentnameById($std_id){
    $query = "SELECT * FROM tbl_student WHERE std_id='$std_id'";
    $result = $this->db->select($query);
    return $result;
}


    //Add Student
public function addStudent($data, $file){
        $std_app_date           = date('d/m/Y');
        $std_name               = $this->fm->validation($data['std_name']);
        $std_father_name        = $this->fm->validation($data['std_father_name']);
        $std_father_nid         = $this->fm->validation($data['std_father_nid']);
        $std_father_dob         = $this->fm->validation($data['std_father_dob']);
        $std_mother_name        = $this->fm->validation($data['std_mother_name']);
        $std_mother_nid         = $this->fm->validation($data['std_mother_nid']);
        $std_mother_dob         = $this->fm->validation($data['std_mother_dob']);
        $std_berth_cer_no       = $this->fm->validation($data['std_berth_cer_no']);
        $std_contact            = $this->fm->validation($data['std_contact']);
        $std_present_address    = $this->fm->validation($data['std_present_address']);
        $std_parmanent_address  = $this->fm->validation($data['std_parmanent_address']);
        $std_dob                = $this->fm->validation($data['std_dob']);
        $std_rel                = $this->fm->validation($data['std_rel']);
        $std_class              = $this->fm->validation($data['std_class']);
$app_year = date('Y');

$std_id=rand(100000,999999);

        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "../upload/".$unique_image;
        $uploaded_image2 = "upload/".$unique_image;

        if (empty($file_name)) {
            echo "<p class='alert alert-danger'>Please Select any Image !</p>";
        } elseif ($file_size >4048567) {
            echo "<p class='alert alert-danger'>Image Size should be less then 4MB! </p>";
        } elseif (in_array($file_ext, $permited) === false) {
            echo "<p class='error'>You can upload only:-".implode(', ', $permited)."</p>";

        } elseif ($std_name == "" || $std_father_name == "" || $std_father_nid == "" || $std_father_dob == "" || $std_mother_name == "" 
        || $std_mother_nid == "" || $std_mother_dob == ""|| $std_berth_cer_no == "" || $std_contact == ""|| $std_present_address == "" 
        || $std_parmanent_address == ""|| $std_dob == "" || $std_rel == ""|| $std_class == "" )
        {
            $msg = "<p class='alert alert-danger'>Fields must not be empty!</p>";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_student(std_app_date, std_add_date, app_year, std_id, std_name, std_father_name, std_father_nid, std_father_dob, 
            std_mother_name, std_mother_nid, std_mother_dob, std_berth_cer_no, std_dob, std_image, 
            std_contact, std_present_address, std_parmanent_address, std_rel, std_class, std_add_payment, std_status) 
            VALUES ('$std_app_date', '$std_app_date', '$app_year','$std_id', '$std_name','$std_father_name','$std_father_nid','$std_father_dob', 
            '$std_mother_name','$std_mother_nid','$std_mother_dob','$std_berth_cer_no', '$std_dob', '$uploaded_image2',
             '$std_contact', '$std_present_address', '$std_parmanent_address', '$std_rel', '$std_class', '1', '2')";
            $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $query = "INSERT INTO tbl_addmission_result(std_id, add_result) VALUES ('$std_id', 'Pass')";
                $inserted_data = $this->db->insert($query);
                if ($inserted_data) {
                    $msg = "<p class='alert alert-success'>Student Add Successfully Complete. Student Id is : ".$std_id. "</p>";
                    return $msg;
                }              
            } else {
                $msg = "<p class='alert alert-danger'>Student Add  not Done.</p>";
                return $msg;
            }
        }
}






}  

?>