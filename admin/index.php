<?php

include "partials/_starterHeadAdmin.php";

if (isset($_GET['login'])) {

    echo "<div class='alert alert-warning alert-dismissible fade show  m-0' role='alert'>
        <strong>Error!</strong>";

        if ($_GET['login'] == 'wrongPass') {
            echo " Incorrect Password.";
        } 
        if($_GET['login'] == 'notExists') {
            echo " This Username does not exist.";
        }

        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";  
}


echo "<div class='container my-5'>
    <div class='container-fluid text-center my-5 pt-5'>
        <h1 class='text-success'>selfLearn Admin Login</h1>
    </div>";

    include "_adminLoginForm.php";
    
echo "</div>";

include "partials/_starterTailAdmin.php";

?>