<?php

echo "<form action='/selflearn/admin/updateAdmin.php?adminID=$adminID' method='post'>
    <div class='mb-3'>
        <label for='adminName' class='form-label'>Name</label>
        <input type='text' class='form-control' id='adminName' name='adminName'>
    </div>
    <div class='mb-3'>
        <label for='adminUsername' class='form-label'>Username</label>
        <input type='text' class='form-control' id='adminUsername' name='adminUsername'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Apply Changes</button>
    </div>
</form>";

?>