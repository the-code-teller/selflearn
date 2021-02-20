<?php

include '../partials/_starterHead.php';

if (isset($_GET['active'])) {
    $active = $_GET['active'];
} else {
    $active = "paymentstatus";
}

include "_feedbackAlerts.php";
include "_changePasswordAlerts.php";

echo "<div class='container px-5 mx-5 align-items-start row'>";

    include "_navtabBarProfile.php";
    include "_navtabContentPaymentStatus.php";
  
echo "</div>";

include '../partials/_starterTail.php';

?>