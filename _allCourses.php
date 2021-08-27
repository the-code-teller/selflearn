<?php

echo "<div class='container-fluid my-2'>
    <div class='d-flex justify-content-between my-3'>
        <div class='text-success'>
            <h4>Popular Courses</h4>
        </div>
        <div>
            <a type='button' href='/selflearn/courses' class='text-success text-decoration-none' role='button'>See all courses</a>
        </div>
    </div>
    <div class='row row-cols-1 row-cols-md-5 g-4'>";
        
    $sql = "SELECT * FROM `courses`";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        
        for ($i=0; $i < 10 && $row = mysqli_fetch_assoc($result); $i++) {
            
            include "_allCoursesSQL.php";
        }
    }

    echo "</div>
</div>";

?>