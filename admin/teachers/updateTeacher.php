<?php

include "../partials/_dbconnect.php";

if (isset($_GET['teacherID'])) {
    $teacherID = $_GET['teacherID'];
}

if(isset($_POST['teacherName']) && $_POST['teacherName'] != "") {

    $teacherName = $_POST['teacherName'];
    $sql = "UPDATE `teachers` SET `teacherName` = '$teacherName' WHERE `teachers`.`teacherID` = $teacherID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['teacherDesignation']) && $_POST['teacherDesignation'] != "") {

    $teacherDesignation = $_POST['teacherDesignation'];
    $sql = "UPDATE `teachers` SET `teacherDesignation` = '$teacherDesignation' WHERE `teachers`.`teacherID` = $teacherID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

header('location: /selflearn/admin/teachers?active=teachers');

?>