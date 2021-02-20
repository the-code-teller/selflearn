<?php

if (isset($_GET['changePass'])) {

    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";

    if ($_GET['changePass'] == 'unmatch') {

        echo "<strong>Error!</strong> Passwords do not match.";
            
    }
    if($_GET['changePass'] == 'wrong') {
            
        echo "<strong>Error!</strong> Wrong Password.";
        
    }
    
    echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

}

?>