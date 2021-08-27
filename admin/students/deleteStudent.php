<?php

include "../partials/_dbconnect.php";

if (isset($_GET['studentID'])) {
    $studentID = $_GET['studentID'];
}

$sql = "DELETE FROM `users` WHERE `studentID` = $studentID";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/students/?active=students');

?>