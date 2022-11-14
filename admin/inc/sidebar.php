<?php
    if(isset($_GET['action']) && $_GET['action']=="logout" ){
        Session::destroy();			
    }		
?>
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>                  
                    <li><a href="index.php" ><i class="ti-home"></i> Dashboard</a></li>
                    <li><a href="profile.php"><i class="ti-user"></i><span>Profile</span></a></li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Teacher 
                    <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="add_teacher_category.php">Teacher Category</a></li>
                            <li><a href="category_list.php">Category List</a></li>
                            <li><a href="add_teacher.php">Add Teacher</a></li>
                            <li><a href="teacher_list.php">Teacher List</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Addmission 
                    <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="addmission_request.php">Addmission Request</a></li>
                            <li><a href="addmission_result.php">Addmission Result</a></li>
                        </ul>
                    </li>

                    
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Theme Setup 
                    <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="class.php">Class Add And List</a></li>
                            <li><a href="year.php">Year Add And List</a></li>
                            <li><a href="exam_list.php">Exam ADD And List</a></li>
                            <li><a href="payment_list.php">Payment Type ADD And List</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Student
                    <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="add_student.php">Add Student</a></li>
                            <li><a href="student_list.php">Student List</a></li>
                            <li><a href="admit_generate.php">Admit Card Genarate</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Account Section
                    <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="student_payment.php">Make Student Payment</a></li>
                            <li><a href="collection_register.php">Daily Collection Register  </a></li>
                        </ul>
                    </li>


                    <li>
                    <a href="?action=logout" onClick="return confirm('Are you sure you want to Logout');">
                        <i class="ti-power-off"></i>
                            <span>Logout</span>
                         </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>