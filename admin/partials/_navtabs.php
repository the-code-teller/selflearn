<?php

if (isset($_GET['active'])) {
    $active = $_GET['active'];
} else {
    $active = "home";
}

echo "<div class='container-fluid align-items-start row'>";

    echo "<div class='col-2'>";
        include "_navtabBar.php";
    echo "</div>";

    echo "<div class='col-10 px-5'>";
        include "_navtabContent.php";
    echo "</div>";

echo "</div>";

?>