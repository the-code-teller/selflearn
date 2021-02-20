<?php

echo "<form action='adminLoginValidation.php' method='post' class='w-25 mx-auto p-4 text-center'>
    <div class='mb-3'>
        <label for='adminUsername' class='form-label'>Username</label>
        <input type='password' class='form-control' id='adminUsername' name='adminUsername' aria-describedby='emailHelp'>
    </div>
    <div class='mb-3'>
        <label for='adminPassword' class='form-label'>Password</label>
        <input type='password' class='form-control' id='adminPassword' name='adminPassword'>
    </div>
    <div class='mb-3'>
        <button type='submit' class='btn btn-primary'>Login</button>
    </div>
</form>";

?>