<?php

echo "<form action='changePassword.php' method='post'>
    <div class='mb-3'>
        <label for='studentOldPassword' class='form-label'>Current Password</label>
        <input type='password' class='form-control' id='studentOldPassword' name='studentOldPassword'>
    </div>
    <div class='mb-3'>
        <label for='studentNewPassword' class='form-label'>New Password</label>
        <input type='password' class='form-control' id='studentNewPassword' name='studentNewPassword'>
    </div>
    <div class='mb-3'>
        <label for='studentNewCPassword' class='form-label'>Confirm Password</label>
        <input type='password' class='form-control' id='studentNewCPassword' name='studentNewCPassword'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </div>
</form>";

?>