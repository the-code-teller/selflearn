<?php

include "../partials/_dbconnect.php";

if (isset($_GET['courseID'])) {
    $courseID = $_GET['courseID'];
}

include "_dropTable.php";

if ($result) {
    
    $sql = "DELETE FROM `courses` WHERE `courses`.`courseID` = $courseID";
    $result = mysqli_query($con, $sql);
    
    header('location: /selflearn/admin/courses/?active=courses');
}

?>