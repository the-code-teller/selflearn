<?php

include "../partials/_dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $teacherName = $_POST['teacherName'];
    $teacherDesignation = $_POST['teacherDesignation'];
    
    $sql = "INSERT INTO `teachers` (`teacherID`, `teacherName`, `teacherDesignation`) VALUES (NULL, '$teacherName', '$teacherDesignation');";
    $result = mysqli_query($con, $sql);

    header('location: /selflearn/admin/teachers/?active=teachers');
    
}

?>