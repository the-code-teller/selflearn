<?php

include '../partials/_starterHead.php';

if ($loggedin) {   

    echo "<h1 class='text-center text-success m-4'>Learning...</h1>";
    echo "<div class='row row-cols-1 row-cols-md-5 g-4'>";

    $sql = "SELECT * FROM `student-course-junction` WHERE `studentID`=$studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) { 

            include "_myCoursesSQL.php";
        }
    }
    echo "</div>";
}

include '../partials/_starterTail.php';

?>