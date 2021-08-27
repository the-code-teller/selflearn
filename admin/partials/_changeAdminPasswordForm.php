<?php

echo "<form action='/selflearn/admin/changeAdminPassword.php?' method='post'>
    <div class='mb-3'>
        <label for='adminOldPassword' class='form-label'>Current Password</label>
        <input type='password' class='form-control' id='adminOldPassword' name='adminOldPassword'>
    </div>
    <div class='mb-3'>
        <label for='adminNewPassword' class='form-label'>New Password</label>
        <input type='password' class='form-control' id='adminNewPassword' name='adminNewPassword'>
    </div>
    <div class='mb-3'>
        <label for='adminNewCPassword' class='form-label'>Confirm Password</label>
        <input type='password' class='form-control' id='adminNewCPassword' name='adminNewCPassword'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </div>
</form>";

?>