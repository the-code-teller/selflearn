<?php

echo "<form action='/selflearn/admin/addAdmin.php' method='post' enctype='multipart/form-data'>
    <div class='mb-3'>
        <label for='adminName' class='form-label'>Name</label>
        <input type='text' class='form-control' id='adminName' name='adminName'>
    </div>
    <div class='mb-3'>
        <label for='adminUsername' class='form-label'>Username</label>
        <input type='text' class='form-control' id='adminUsername' name='adminUsername'>
    </div>
    <div class='mb-3'>
        <label for='adminPassword' class='form-label'>Password</label>
        <input type='password' class='form-control' id='adminPassword' name='adminPassword'>
    </div>
    <div class='mb-3'>
        <label for='adminCPassword' class='form-label'>Confirm Password</label>
        <input type='password' class='form-control' id='adminCPassword' name='adminCPassword'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Add Admin</button>
    </div>
</form>";

?>