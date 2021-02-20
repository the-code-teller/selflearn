<?php

include '../partials/_starterHead.php';

echo "<h1 class='text-center text-success m-4'>All Courses</h1>";

echo "<div class='row row-cols-1 row-cols-md-5 g-4'>";

$sql = "SELECT * FROM `courses`";
$result = mysqli_query($con, $sql);
    
if ($result) {
        
    while ($row = mysqli_fetch_assoc($result)) {
        
        include "_allCoursesSQL.php";
    }
}

echo "</div>";

include '../partials/_starterTail.php';

?>