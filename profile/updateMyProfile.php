<?php

include "../partials/_sessionHead.php";

if(isset($_POST['studentFirstName']) && $_POST['studentFirstName'] != "") {

    $studentFirstName = $_POST['studentFirstName'];
    $sql = "UPDATE `users` SET `studentFirstName` = '$studentFirstName' WHERE `users`.`studentID` = $studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $_SESSION['studentFirstName'] = $studentFirstName;
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['studentLastName']) && $_POST['studentLastName'] != "") {

    $studentLastName = $_POST['studentLastName'];
    $sql = "UPDATE `users` SET `studentLastName` = '$studentLastName' WHERE `users`.`studentID` = $studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $_SESSION['studentLastName'] = $studentLastName;
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['studentOccupation']) && $_POST['studentOccupation'] != "") {

    $studentOccupation = $_POST['studentOccupation'];
    $sql = "UPDATE `users` SET `studentOccupation` = '$studentOccupation' WHERE `users`.`studentID` = $studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $_SESSION['studentOccupation'] = $studentOccupation;
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_FILES['studentDP'])) {
    $studentDP = $_FILES['studentDP'];
    $imgName = $studentDP['name'];
    move_uploaded_file($studentDP['tmp_name'], "../img/".$imgName);
    $sql = "UPDATE `users` SET `studentDP` = '$imgName' WHERE `users`.`studentID` = $studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $_SESSION['studentDP'] = $imgName;
        echo "Yes";
    } else {
        echo "No";
    }
}

header('location: /selflearn/profile');

?>