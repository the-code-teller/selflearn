<?php

echo "<style>
        .inputWarning {
            display : none;
            color : red;
        }
    </style>
    <script>
        
    </script>
<form action='/selflearn/signup.php' method='post' onsubmit='return signupValidation()'>
    <div class='mb-3'>
        <label for='studentEmail' class='form-label'>Email</label>
        <input type='email' class='form-control' id='studentEmail' name='studentEmail'>
        <span class='inputWarning' id='emailFormatWarning'><small>Invalid Email</small></span>
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
        <span class='inputWarning' id='passwordFormatWarning'><small>Password must contain at least one each of Capital Letters, Small Letters, Digits and Special Characters excluding spaces or any other Escape character</small></span>
    </div>
    <div class='mb-3'>
        <label for='studentCPassword' class='form-label'>Confirm Password</label>
        <input type='password' class='form-control' id='studentCPassword' name='studentCPassword'>
        <span class='inputWarning' id='passwordUnmatchWarning'><small>Passwords do not match</small></span>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary' id='submitSignup'>Create Account</button>
    </div>
</form>";

?>