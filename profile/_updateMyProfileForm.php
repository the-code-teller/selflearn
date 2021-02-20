<?php

echo "<form action='updateMyProfile.php' method='post' enctype='multipart/form-data'>
        <div class='mb-3'>
            <label for='studentFirstName' class='form-label'>First Name:</label>
            <input type='text' class='form-control' id='studentFirstName' name='studentFirstName' placeholder='$studentFirstName'>
        </div>
        <div class='mb-3'>
            <label for='studentLastName' class='form-label'>Last Name:</label>
            <input type='text' class='form-control' id='studentLastName' name='studentLastName' placeholder='$studentLastName'>
        </div>
        <div class='mb-3'>
            <label for='studentOccupation' class='form-label'>Occupation :</label>
            <input type='text' class='form-control' id='studentOccupation' name='studentOccupation' placeholder='$studentOccupation'>
        </div>
        <div class='mb-3 border-0'>
            <label for='studentDP' class='form-label'>Update Profile Picture</label>
            <br>
            <input type='file' class='form-control-file' name='studentDP'>
        </div>
        <div class='modal-footer'>
            <button type='submit' class='btn btn-primary'>Make Changes</button>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        </div>
</form>";

?>