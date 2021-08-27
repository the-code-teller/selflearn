<?php

include "partials/_dbconnect.php";

if (isset($_GET['adminID'])) {
    $adminID = $_GET['adminID'];
}

if(isset($_POST['adminName']) && $_POST['adminName'] != "") {

    $adminName = $_POST['adminName'];
    $sql = "UPDATE `admins` SET `adminName` = '$adminName' WHERE `admins`.`adminID` = $adminID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['adminUsername']) && $_POST['adminUsername'] != "") {

    $adminUsername = $_POST['adminUsername'];
    $sql = "UPDATE `admins` SET `adminUsername` = '$adminUsername' WHERE `admins`.`adminID` = $adminID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

header('location: /selflearn/admin/home/?active=home');

?>