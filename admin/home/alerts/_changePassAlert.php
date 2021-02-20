<?php

if (isset($_GET['changePass'])) {

    echo "<div class='alert alert-warning alert-dismissible fade show  m-0' role='alert'>
        <strong>Error!</strong>";

        if ($_GET['changePass'] == 'wrong') {
            echo " Incorrect Password.";
        } 
        if($_GET['changePass'] == 'unmatch') {
            echo " The passwords do not match.";
        }

        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";  
}

?>