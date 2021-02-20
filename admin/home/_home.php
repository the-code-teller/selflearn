<?php

$sql = "SELECT * FROM `users`";
$result = mysqli_query($con, $sql);
if ($result) {   
    $nos = mysqli_num_rows($result);
}

$sql = "SELECT * FROM `courses`";
$result = mysqli_query($con, $sql);
if ($result) {   
    $noc = mysqli_num_rows($result);
}

$sql = "SELECT * FROM `student-course-junction`";
$result = mysqli_query($con, $sql);
if ($result) {   
    $nop = mysqli_num_rows($result);
}

echo "<div class='row text-white text-center my-3 mx-5'>

    <div class='card mb-3 bg-success col m-3' style='max-width: 18rem;'>
        <div class='card-header bg-transparent'></div>
        <div class='card-body'>
            <h1 class='card-title'>$noc</h1>
        </div>
        <div class='card-footer bg-transparent'><a href='#' class='text-decoration-none stretched-link text-white'>Courses</a></div>
    </div>

    <div class='card mb-3 bg-success col m-3' style='max-width: 18rem;'>
        <div class='card-header bg-transparent'></div>
        <div class='card-body'>
            <h1 class='card-title'>$nos</h1>
        </div>
        <div class='card-footer bg-transparent'><a href='#' class='text-decoration-none stretched-link text-white'>Students Enrolled</a></div>
    </div>

    <div class='card mb-3 bg-success col m-3' style='max-width: 18rem;'>
        <div class='card-header bg-transparent'></div>
        <div class='card-body'>
            <h1 class='card-title'>$nop</h1>
        </div>
        <div class='card-footer bg-transparent'><a href='#' class='text-decoration-none stretched-link text-white'>Course Purchases</a></div>
    </div>
    
</div>

";

include '_ordersTable.php';

?>