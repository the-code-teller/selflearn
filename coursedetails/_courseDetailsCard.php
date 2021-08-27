<?php

echo "<div class=' container-fluid card border-0 p-5'>
    <div class='row g-0'>
        <div class='col-md-4'>
            <img src='../admin/$courseDP' class='w-100 h-100' alt='...' height='500px'>
        </div>
        <div class='col-md-8'>
            <div class='card-body'>    
                <h1 class='card-title'>$courseTitle</h1>
                <p class='card-text'>$courseDescription</p>
                <div class='text-secondary'>
                    $teacherName
                    <small>($teacherDesignation)</small>
                </div>
                <div class='d-flex justify-content-between'>";
                    
                    if ($loggedin) {

                        $sql = "SELECT * FROM `student-course-junction` WHERE `studentID`=$studentID AND `courseID`=$courseID";
                        $result = mysqli_query($con, $sql);
                        $nor = mysqli_num_rows($result);
                        if ($nor == 0) {   
                            echo "<div class='text-danger mt-4'><strong>Price : $ $coursePrice</strong></div>
                            <div class='mx-4'> 
                                <button  href='#' type='button' class='btn btn-success btn-sm nav-link' data-bs-toggle='modal' data-bs-target='#orderModal'>Buy Now</button>
                            </div>";
                        }
                    }

                echo "</div>
            </div>
        </div>
    </div>
</div>";

include "_orderModal.php";

?>