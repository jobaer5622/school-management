<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');



/**
 * Theme Setup Class
 */
class themesetup
{

public function __construct()
{
    $this->db = new Database();
    $this->fm = new Format();
}

    //Get All Class List
public function getAllClass(){
    $query = "SELECT * FROM tbl_class";
    $result = $this->db->select($query);
    return $result;
}

    //Add Class
public function addTeacher($data){
    $class             = $this->fm->validation($data['class']);

    if ($class == "" ) {
        $msg = "<p class='alert alert-danger'>Fields must not be empty!</p>";
        return $msg;
    }else{
        $query = "INSERT INTO tbl_class(class) VALUES('$class')";
    $inserted_row = $this->db->insert($query);
        if ($inserted_row) {
            $msg = "<p class='alert alert-success'>class Data Added Successfully</p>";
            return $msg;
        } else {
            $msg = "<span class='alert alert-danger'>class Not Added.</span>";
            return $msg;
        }
    }
}


    //Show Year in Fromtend
public function showYearinFront(){
    $query = "SELECT * FROM tbl_year WHERE front='1'";
    $result = $this->db->select($query);
    return $result;
}
    //Show Year in backend
public function getAllYear(){
    $query = "SELECT * FROM tbl_year";
    $result = $this->db->select($query);
    return $result;
}

    //Add Year
public function addTeardata($data){
    $year             = $this->fm->validation($data['year']);
    $front             = $this->fm->validation($data['front']);

    if ($year == "" || $front == "") {
        $msg = "<p class='alert alert-danger'>Fields must not be empty!</p>";
        return $msg;
    }else{
        $query = "INSERT INTO tbl_year(year, front) VALUES('$year', '$front')";
        $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $msg = "<p class='alert alert-success'>Year Data Added Successfully</p>";
                return $msg;
            } else {
                $msg = "<span class='alert alert-danger'>Year Not Added.</span>";
                return $msg;
            }

    }
}

    //Delete Year
public function delyear($delId){
    $id = mysqli_real_escape_string($this->db->link, $delId);
    $query = "DELETE FROM tbl_year WHERE id = '$id'";
    $deldata = $this->db->delete($query);
    if ($deldata) {
        $msg = "<span class='alert alert-success'>Year Deleted Successfully</span>";
        return $msg;
    } else {
        $msg = "<span class='alert alert-denger'>Year Not Deleted!</span>";
        return $msg;
    } 
}


    //Add Exam Name
public function addExam($data){
    $exam_name             = $this->fm->validation($data['exam_name']);

    if ($exam_name == "" ) {
        $msg = "<p class='alert alert-danger'>Fields must not be empty!</p>";
        return $msg;
    }else{
        $query = "INSERT INTO tbl_exam(exam_name) VALUES('$exam_name')";
    $inserted_row = $this->db->insert($query);
        if ($inserted_row) {
            $msg = "<p class='alert alert-success'>Exam Data Added Successfully</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Exam Not Added.</p>";
            return $msg;
        }
    }
}

    //Get All Exam list for backend
public function getAllExam(){
    $query = "SELECT * FROM tbl_exam";
    $result = $this->db->select($query);
    return $result;
}
    //Exam Send In Frontend
public function updateExamInformation($upId){
    $query = "UPDATE tbl_exam
    SET
    exam_status = '1'

    WHERE id = '$upId'";

        $updated_row = $this->db->update($query);  

        if ($updated_row) {
            $msg = "<p class='alert alert-success'>Exam Update  Successfully.</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Exam not Update.</p>";
            return $msg;
        }
}


    //Show Year in Frontend
public function showExaminFront(){
    $query = "SELECT * FROM tbl_exam WHERE exam_status='1'";
    $result = $this->db->select($query);
    return $result;
}
    //Show All Payment Type
public function showAllPaymentType(){
    $query = "SELECT * FROM tbl_payment_type";
    $result = $this->db->select($query);
    return $result;
}


    //Add Payment Type
public function addPayment($data){
    $type_of_payment             = $this->fm->validation($data['type_of_payment']);

    if ($type_of_payment == "" ) {
        $msg = "<p class='alert alert-danger'>Fields must not be empty!</p>";
        return $msg;
    }else{
        $query = "INSERT INTO tbl_payment_type(type_of_payment) VALUES('$type_of_payment')";
    $inserted_row = $this->db->insert($query);
        if ($inserted_row) {
            $msg = "<p class='alert alert-success'>Payment Type Added Successfully</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'>Payment Type Not Added.</p>";
            return $msg;
        }
    }
}





}

?>