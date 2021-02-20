<?php

echo "<form action='/selflearn.com/signup.php' method='post'>
    <div class='mb-3'>
        <label for='studentEmail' class='form-label'>Email</label>
        <input type='email' class='form-control' id='studentEmail' name='studentEmail'>
    </div>
    <div class='mb-3'>
        <label for='studentFirstName' class='form-label'>First Name</label>
        <input type='text' class='form-control' id='studentFirstName' name='studentFirstName'>
    </div>
    <div class='mb-3'>
        <label for='studentLastName' class='form-label'>Last Name</label>
        <input type='text' class='form-control' id='studentLastName' name='studentLastName'>
    </div>
    <div class='mb-3'>
        <label for='studentPassword' class='form-label'>Password</label>
        <input type='password' class='form-control' id='studentPassword' name='studentPassword'>
    </div>
    <div class='mb-3'>
        <label for='studentCPassword' class='form-label'>Confirm Password</label>
        <input type='password' class='form-control' id='studentCPassword' name='studentCPassword'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Create Account</button>
    </div>
</form>";

?>