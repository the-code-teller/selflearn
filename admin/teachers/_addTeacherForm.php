<?php

echo "<form action='addTeacher.php' method='post' enctype='multipart/form-data'>
    <div class='mb-3'>
        <label for='teacherName' class='form-label'>Teacher Name</label>
        <input type='text' class='form-control' id='teacherName' name='teacherName'>
    </div>
    <div class='mb-3'>
        <label for='teacherDesignation' class='form-label'>Teacher Designation</label>
        <input type='text' class='form-control' id='teacherDesignation' name='teacherDesignation'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Add Teacher</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>