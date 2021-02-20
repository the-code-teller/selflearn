<?php

echo "<form action='updateStudent.php?studentID=$studentID' method='post'>
    <div class='mb-3'>
        <label for='studentFirstName' class='form-label'>Student First Name</label>
        <input type='text' class='form-control' id='studentFirstName' name='studentFirstName'>
    </div>
    <div class='mb-3'>
        <label for='studentLastName' class='form-label'>Student Last Name</label>
        <input type='text' class='form-control' id='studentLastName' name='studentLastName'>
    </div>
    <div class='mb-3'>
        <label for='studentPassword' class='form-label'>Student Password</label>
        <input type='password' class='form-control' id='studentPassword' name='studentPassword'>
    </div>
    <div class='mb-3'>
        <label for='studentCPassword' class='form-label'>Confirm Password</label>
        <input type='password' class='form-control' id='studentCPassword' name='studentCPassword'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Apply Changes</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>