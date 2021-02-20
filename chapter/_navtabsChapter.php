<?php

if (isset($_GET['active'])) {
    $active = $_GET['active'];
} else {
    $active = "1";
}

echo "<div class='d-flex align-items-start'>";

    include "_navtabChapterBar.php";
    echo "<div class='container p-5'>";
        include "_navtabChapterContent.php";
    echo "</div>";
  
echo "</div>";

?>