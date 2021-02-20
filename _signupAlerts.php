<?php

if (isset($_GET['signup'])) {

    if ($_GET['signup'] == 'success') {
           
        echo "<div class='alert alert-success alert-dismissible fade show m-0' role='alert'>
        <strong>Success!</strong> Your account was successfully created.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } else {
      
        echo "<div class='alert alert-warning alert-dismissible fade show  m-0' role='alert'>
        <strong>Error!</strong>";

        if ($_GET['signup'] == 'unmatch') {
            echo " Passwords do not match.";
        } 
        if($_GET['signup'] == 'exists') {
            echo " This Email ID already exists.";
        }

        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";  
    }
}

?>