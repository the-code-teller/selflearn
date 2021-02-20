<?php

echo "<form action='myProfile/updateMyProfile.php' method='post' enctype='multipart/form-data' class='w-75 mx-auto py-4'>
    <fieldset disabled='disabled'>
        <div class='mb-3'>
            <label for='studentEmail' class='form-label'>E-mail :</label>
            <input type='email' class='form-control' id='studentEmail' placeholder='$studentEmail'>
        </div>
        <div class='mb-3'>
            <label for='name' class='form-label'>Name:</label>
            <input type='text' class='form-control' id='name' name='name' placeholder='$studentFirstName $studentLastName'>
        </div>
        <div class='mb-3'>
            <label for='occupation' class='form-label'>Occupation :</label>
            <input type='text' class='form-control' id='occupation' name='occupation' placeholder='$studentOccupation'>
        </div>
    </fieldset>
    <div class='my-3'>
        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#updateMyProfileModal'>Update Profile</button>
    </div>
</form>";

include "_updateMyProfileModal.php";

?>