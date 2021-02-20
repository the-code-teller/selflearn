<?php

if (isset($_GET['feedback'])) {

    if ($_GET['feedback'] == 'success') {

        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Thanks!</strong> for sharing your views.";
            
    }
    if($_GET['feedback'] == 'failure') {
            
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> Due to some technical issue your feedback could not be submitted.";
        
    }
    
    echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

}

?>