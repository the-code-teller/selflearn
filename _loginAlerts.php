<?php

if (isset($_GET['login'])) {

    echo "<div class='alert alert-warning alert-dismissible fade show  m-0' role='alert'>
        <strong>Error!</strong>";

        if ($_GET['login'] == 'wrongPass') {
            echo " Incorrect Password.";
        } 
        if($_GET['login'] == 'notExists') {
            echo " This Email ID does not exist.";
        }

        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";  
}

?>