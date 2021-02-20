<?php

echo "<div class='col'>
    <div class='card h-100'>
        <a href='/selflearn.com/coursedetails?courseID=$courseID' class='stretched-link'>
            <img src='/selflearn.com/admin/img/$courseDP' class='card-img-top' alt='...'>
        </a>
        <div class='card-body'>
            <div>
                <h5 class='card-title'>$courseTitle</h5>
            </div>
            <div class='text-secondary'>
                $teacherName<br>
                <small>$teacherDesignation</small>
            </div>
        </div>
    </div>
</div>";

?>