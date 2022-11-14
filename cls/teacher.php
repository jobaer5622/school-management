<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/Database.php');
include_once($filepath.'/../helpers/Format.php');



/**
 * Teacher Class
 */
class Teacher
{
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

            //Get all Teacher Data
    public function getAllTeacher()
    {
        $query = "SELECT tbl_teacher.*,tbl_category.t_category FROM tbl_teacher
        JOIN tbl_category
        On tbl_teacher.t_degination = tbl_category.id
        ORDER BY tbl_teacher.t_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
        //Get all Current Teacher Data
public function getAllCurrentTeacher()
{
    $query = "SELECT tbl_teacher.*,tbl_category.t_category FROM tbl_teacher
    JOIN tbl_category
    On tbl_teacher.t_degination = tbl_category.id   
    
    WHERE t_status='1' ORDER BY tbl_teacher.t_degination ASC";
    $result = $this->db->select($query);
    return $result;
}

        //Get all Retried Headmaster Data
public function getAllRetriedHeadmaster()
{
    $query = "SELECT * FROM tbl_teacher WHERE t_status='2' AND t_degination='Headmaster'";
    $result = $this->db->select($query);
    return $result;
}

        //Get all Retried Headmaster Data
public function getAllRetriedTeacher()
{
    $query = "SELECT * FROM tbl_teacher WHERE t_status='2'";
    $result = $this->db->select($query);
    return $result;
}
            // Get Teacher data by id   
public function getTeacherInfo($t_id)
{
    $query = "SELECT tbl_teacher.*,tbl_category.t_category FROM tbl_teacher
    JOIN tbl_category
    On tbl_teacher.t_degination = tbl_category.id 
    WHERE tbl_teacher.t_id=$t_id";

    $result = $this->db->select($query);
    return $result;
}

            //Add Teacher
public function addTeacher($data, $file)
{
        $t_name             = $this->fm->validation($data['t_name']);
        $t_index            = $this->fm->validation($data['t_index']);
        $t_degination       = $this->fm->validation($data['t_degination']);
        $t_edu              = $this->fm->validation($data['t_edu']);
        $t_contact          = $this->fm->validation($data['t_contact']);
        $t_email            = $this->fm->validation($data['t_email']);
        $t_status           = $this->fm->validation($data['t_status']);

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
            echo "<span class='error'>Please Select any Image !</span>";
        } elseif ($file_size >4048567) {
            echo "<span class='error'>Image Size should be less then 4MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
            echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
        } elseif ($t_name == ""  || $t_degination == "" || $t_edu == "" || $t_contact == "" || $t_email == "" || $t_status == "") {
            $msg = "<span class='error'>Fields must not be empty!</span>";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_teacher(t_name, t_index, t_degination, t_edu, t_contact, t_email, t_photo, t_status) 
                VALUES('$t_name', '$t_index', '$t_degination', '$t_edu', '$t_contact', '$t_email', '$uploaded_image2', '$t_status')";
            $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $msg = "<span class='success'>Teacher Data Added Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Teacher Data Not Added.</span>";
                return $msg;
            }
        }
    
}

    //Edit Teacher Information
public function editTeacherInfo($data, $file, $t_id)
{
    $t_name             = $this->fm->validation($data['t_name']);
    $t_index            = $this->fm->validation($data['t_index']);
    $t_degination       = $this->fm->validation($data['t_degination']);
    $t_edu              = $this->fm->validation($data['t_edu']);
    $t_contact          = $this->fm->validation($data['t_contact']);
    $t_email            = $this->fm->validation($data['t_email']);
    $t_status           = $this->fm->validation($data['t_status']);
    $t_retried_date     = $this->fm->validation($data['t_retried_date']);

    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../upload/".$unique_image;
    $uploaded_image2 = "upload/".$unique_image;


    if ($t_name == "" || $t_index == "" || $t_degination == "" || $t_edu == "" || $t_contact == "" || $t_email == "" || $t_status == "") {
        $msg = "<span class='error'>Fields must not be empty!</span>";
        return $msg;
    } else {
        if (!empty($file_name)) {
            if ($file_size >4048567) {
                echo "<span class='error'>Image Size should be less then 4MB! </span>";
            } elseif (in_array($file_ext, $permited) === false) {
                echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
            } else {
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_teacher
                            SET
                            t_name ='$t_name',
                            t_index       ='$t_index',
                            t_degination     ='$t_degination',
                            t_edu        ='$t_edu',
                            t_contact       ='$t_contact',
                            t_email       ='$t_email',
                            t_photo     = '$uploaded_image2',
                            t_status        ='$t_status',
                            t_retried_date = '$t_retried_date'
                            WHERE t_id = '$t_id'";
                $updated_row = $this->db->update($query);
                if ($updated_row) {
                    $msg = "<span class='success'>Teacher Data Updated Successfully</span>";
                    return $msg;
                } else {
                    $msg = "<span class='error'>Teacher Data  Not Updated.</span>";
                    return $msg;
                }
            }
        } else {
            $query = "UPDATE tbl_teacher
            SET
            t_name ='$t_name',
            t_index       ='$t_index',
            t_degination     ='$t_degination',
            t_edu        ='$t_edu',
            t_contact       ='$t_contact',
            t_email       ='$t_email',
            t_status        ='$t_status',
            t_retried_date = '$t_retried_date'
            WHERE t_id = '$t_id'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<span class='success'>Teacher Data Updated Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Teacher Data Not Updated.</span>";
                return $msg;
            }
        }
    }



}
    //Delete Teacher info by ID
public function delteacherbyId($delId){
    $id = mysqli_real_escape_string($this->db->link, $delId);
    $query = "DELETE FROM tbl_teacher WHERE t_id = '$id'";
    $deldata = $this->db->delete($query);
    if ($deldata) {
        $msg = "<span class='alert alert-success'>Teacher Information Deleted Successfully</span>";
        return $msg;
    } else {
        $msg = "<span class='alert alert-denger'>Teacher Information Not Deleted!</span>";
        return $msg;
    }   
}

    //Add Category
public function addTeacherCategory($t_category)
{
    if ($t_category == "" ) {
        $msg = "<span class='error'>Fields must not be empty!</span>";
        return $msg;
    }else{
        $query = "INSERT INTO tbl_category(t_category) VALUES('$t_category')";
    $inserted_row = $this->db->insert($query);
        if ($inserted_row) {
            $msg = "<span class='success'>Teacher Category Data Added Successfully</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Teacher Category Data Not Added.</span>";
            return $msg;
        }
    }
}

        //Get all Teacher Category
public function getAllTeacherCategory()
{
    $query = "SELECT * FROM tbl_category ORDER BY id ASC";
    $result = $this->db->select($query);
    return $result;
}


        //Get all Teacher Category by id
public function getTeacherCategorybyId($editcat)
{
    $query = "SELECT * FROM tbl_category WHERE id='$editcat'";
    $result = $this->db->select($query);
    return $result;
}



        //Delete Teacher Category
public function delteachercat($id)
{
    $id = mysqli_real_escape_string($this->db->link, $id);
    $query = "DELETE FROM tbl_category WHERE id = '$id'";
    $deldata = $this->db->delete($query);
    if ($deldata) {
        $msg = "<span class='alert alert-success'>Teacher Category Deleted Successfully</span>";
        return $msg;
    } else {
        $msg = "<span class='alert alert-denger'>Teacher Category Not Deleted!</span>";
        return $msg;
    }
}

        //Update Teacher Category
public function updateTeacherCategory($t_category, $editcat){	        
         
    if(empty($t_category)){
        $msg = "<P class='alert alert-danger' role='alert'>Fields must not be empty!</p>";
        return $msg;
    }
    else{
        $query="update tbl_category 
        SET 
        t_category = '$t_category'	
              
        WHERE id = '$editcat'";
          $update = $this->db->update($query);
               if($update){
                    $msg = "<P class='alert alert-success' role='alert'>Teacher Category Updated Successfully</p>";
                    return $msg;
                }	
     
    }
}





}
?>