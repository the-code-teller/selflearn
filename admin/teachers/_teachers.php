<?php

// echo "<h1 class='text-center'>Teachers</h1>";
include "_teachersTable.php";

include "_addTeacherModal.php";
echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#addTeacherModal'><i class='bi bi-person-plus-fill h3'></i></button>";

?>