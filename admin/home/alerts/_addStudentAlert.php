<?php

if (isset($_GET['addStudent'])) {
    
    echo "<strong>Error!</strong>";

    if ($_GET['addStudent'] == 'unmatch') {
        echo "Passwords do not match.";    
    }
    if ($_GET['addStudent'] == 'exists') {
        echo "This Email Id already exists.";
    }

    echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
}

?>