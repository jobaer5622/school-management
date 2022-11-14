<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');



/**
 * Addmission Class
 */
class Addmission
{

public function __construct()
{
    $this->db = new Database();
    $this->fm = new Format();
}

        //Addmission Request
public function studentAddmission($data, $file){
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
        $uploaded_image = "upload/".$unique_image;
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
            $msg = "<p class='error'>Fields must not be empty!</p>";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_student(std_app_date, app_year, std_id, std_name, std_father_name, std_father_nid, std_father_dob, 
            std_mother_name, std_mother_nid, std_mother_dob, std_berth_cer_no, std_dob, std_image, 
            std_contact, std_present_address, std_parmanent_address, std_rel, std_class, std_add_payment, std_status) 
            VALUES ('$std_app_date', '$app_year','$std_id', '$std_name','$std_father_name','$std_father_nid','$std_father_dob', 
            '$std_mother_name','$std_mother_nid','$std_mother_dob','$std_berth_cer_no', '$std_dob', '$uploaded_image2',
             '$std_contact', '$std_present_address', '$std_parmanent_address', '$std_rel', '$std_class', '0', '1')";
            $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $msg = "<p class='alert alert-success'>Student Addmission Request Successfully Complete. Your Application Id is : </p>".$std_id;
                return $msg;
            } else {
                $msg = "<p class='alert alert-danger'>Student Addmission request not Done.</p>";
                return $msg;
            }
        }
}

    // Get Student data by Student id for admission search
public function studentAdmitSearch($data)
{
    $std_exam_year               = $this->fm->validation($data['std_exam_year']);
    $application_id              = $this->fm->validation($data['application_id']);

    $query = "SELECT * FROM tbl_student WHERE std_status='1' AND app_year = '$std_exam_year' AND std_id='$application_id' AND std_add_payment='1'";
    $result = $this->db->select($query);
    return $result;
}


    // Get Student data by Student id for payment information
public function studentAddmissionPayment($data)
{
    $std_exam_year               = $this->fm->validation($data['std_exam_year']);
    $application_id              = $this->fm->validation($data['application_id']);
    
    $query = "SELECT * FROM tbl_student WHERE std_status='1' AND app_year = '$std_exam_year' AND std_id='$application_id' AND std_add_payment=0";
    $result = $this->db->select($query);
    return $result;
}

    // Get Student data by Student id for payment done
public function studentAddmissionPaymentDone($data)
{
    $std_exam_year               = $this->fm->validation($data['app_year']);
    $application_id              = $this->fm->validation($data['application_id']);
        
    $query = "SELECT * FROM tbl_student WHERE app_year = '$std_exam_year' AND std_id='$application_id'";
    $result = $this->db->select($query);
    return $result;
}


    //Payment Conformation
public function paymentDone($application_id, $tran_id)
{
    $query = "UPDATE tbl_student
    SET
    std_status = '1',
    std_add_payment = '1',
    std_pmt_txnId = '$tran_id'

    WHERE std_id = '$application_id'";
        $updated_row = $this->db->update($query);  
}

    //Get Addmission Request Student List
public function getaddmissionrequest($app_year, $std_add_payment)
{
    $query = "SELECT * FROM tbl_student WHERE std_status='1' AND app_year = '$app_year' AND std_add_payment='$std_add_payment'";
    $result = $this->db->select($query);
    return $result;
}


    //Get student information with Result by id 
public function getStudentInformationById($std_id){
        
    $query = "SELECT s.*, r.*
                FROM tbl_student AS s, tbl_addmission_result AS r
                WHERE s.std_id = r.std_id AND s.std_id = $std_id";
    $result = $this->db->select($query);
    return $result;
}


    //Student Addmission Done
public function addmissionDone($data)
{
    $std_add_date = date('d/m/Y');
    $std_status           = $this->fm->validation($data['std_status']);
    $std_id               = $this->fm->validation($data['std_id']);

    $query = "UPDATE tbl_student
    SET
    std_status = '$std_status',
    std_add_date = '$std_add_date'

    WHERE std_id = '$std_id'";
        $updated_row = $this->db->update($query);  

        if ($updated_row) {
            $msg = "<p class='alert alert-success'>Student Addmission  Successfully Complete.</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Student Addmission  not Done.</p>";
            return $msg;
        }
    
}

    //Student Result Upload
public function studenrAddmissionResultUpload($data){
    $std_id                  = $this->fm->validation($data['application_id']);
    $add_result              = $this->fm->validation($data['add_result']);

    $query = "SELECT * FROM tbl_addmission_result WHERE std_id='$std_id'";
    $getdata = $this->db->select($query);

    if ($std_id == "" || $add_result == "" )
    {
        $msg = "<p class='error'>Fields must not be empty!</p>";
        return $msg;
    } elseif ($getdata != false) {
                $msg = "<div class='alert alert-danger'><strong>Error !</strong> Result Alrady Uploaded</div>";
                return $msg;
    }else{
        $query = "INSERT INTO tbl_addmission_result(std_id, add_result) VALUES ('$std_id', '$add_result')";
        $inserted_row = $this->db->insert($query);
        if ($inserted_row) {
            $msg = "<p class='alert alert-success'>Student Result Upload Done</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Student Result not Upload.</p>";
            return $msg;
        }
    }
}


}
?>