<?php

echo "<div class='container-fluid my-2'>
    <div class='d-flex justify-content-between my-3'>
        <div class='text-success'>
            <h4>Popular Courses</h4>
        </div>
        <div>
            <a type='button' href='/selflearn/courses' class='text-success text-decoration-none' role='button'>See all courses</a>
        </div>
    </div>";
        
    echo "<div class='row row-cols-1 row-cols-md-5 g-4'>";
        include "_coursesSQL.php";
    echo "</div>";

echo "</div>";

?>