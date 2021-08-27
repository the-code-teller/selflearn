<?php

include "../partials/_dbconnect.php";

if (isset($_GET['feedbackID'])) {
    $feedbackID = $_GET['feedbackID'];
}

$sql = "DELETE FROM `feedbacks` WHERE `feedbackID` = $feedbackID";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/feedbacks/?active=feedbacks');

?>