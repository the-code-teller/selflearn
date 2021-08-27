<?php

include "../partials/_dbconnect.php";

if (isset($_GET['teacherID'])) {
    $teacherID = $_GET['teacherID'];
}

$sql = "DELETE FROM `teachers` WHERE `teacherID` = $teacherID";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/teachers/?active=teachers');

?>