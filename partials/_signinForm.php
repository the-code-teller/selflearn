<?php

echo "<form action='/selflearn.com/loginValidation.php' method='post'>
    <div class='mb-3'>
        <label for='studentEmail' class='form-label'>Email</label>
        <input type='email' class='form-control' id='studentEmail' name='studentEmail'>
    </div>
        <label for='studentPassword' class='form-label'>Password</label>
        <input type='password' class='form-control' id='studentPassword' name='studentPassword'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Sign In</button>
    </div>
</form>";

?>