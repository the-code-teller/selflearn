<?php

// echo "<h1 class='text-center'>Courses</h1>";
include "_coursesTable.php";

include "_addCourseModal.php";
echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#addCourseModal' data-bs-toggle='tooltip' data-bs-placement='top' title='Tooltip on top'><i class='bi bi-plus-square h3'></button>";

?>