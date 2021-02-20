<?php

if (isset($_GET['addAdmin'])) {
    
    if ($_GET['addAdmin'] == "success") {

        echo "<div class='alert alert-success alert-dismissible fade show  m-0' role='alert'>
        <strong>Success!</strong> New Admin has been added.";

    } else {
        
        echo "<div class='alert alert-warning alert-dismissible fade show  m-0' role='alert'>
        <strong>Error!</strong>";

        if ($_GET['addAdmin'] == 'unmatch') {
            echo "Passwords do not match.";    
        }
        if ($_GET['addAdmin'] == 'exists') {
            echo "This username already exists.";
        }
    }
    echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
}

?>