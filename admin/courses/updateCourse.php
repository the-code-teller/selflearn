<?php

include "../partials/_dbconnect.php";

if (isset($_GET['courseID'])) {
    $courseID = $_GET['courseID'];
}

if(isset($_POST['courseTitle']) && $_POST['courseTitle'] != "") {

    $courseTitle = $_POST['courseTitle'];
    $sql = "UPDATE `courses` SET `courseTitle` = '$courseTitle' WHERE `courses`.`courseID` = $courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['courseDescription']) && $_POST['courseDescription'] != "") {

    $courseDescription = $_POST['courseDescription'];
    $sql = "UPDATE `courses` SET `courseDescription` = '$courseDescription' WHERE `courses`.`courseID` = $courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['coursePrice']) && $_POST['coursePrice'] != 0) {

    $coursePrice = $_POST['coursePrice'];
    $sql = "UPDATE `courses` SET `coursePrice` = '$coursePrice' WHERE `courses`.`courseID` = $courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_FILES['courseDP'])) {

    $courseDP = $_FILES['courseDP'];
    $imgName = $courseDP['name'];
    move_uploaded_file($courseDP['tmp_name'], "../img/".$imgName);
    $sql = "UPDATE `courses` SET `courseDP` = '$imgName' WHERE `courseID` = $courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['courseTableName']) && $_POST['courseTableName'] != "") {

    $courseTableName = $_POST['courseTableName'];

    $sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $oldCourseTableName = $row['courseTableName'];
    }

    $sql = "RENAME TABLE `selflearn`.`$oldCourseTableName` TO `selflearn`.`$courseTableName`";
    $result = mysqli_query($con, $sql);
    if ($result) {
        
        $sql = "UPDATE `courses` SET `courseTableName` = '$courseTableName' WHERE `courses`.`courseID` = $courseID";
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            echo "Yes";
        } else {
            echo "No";
        }
    } else {
        echo "No";
    }
}

if(isset($_POST['teacherID']) && $_POST['teacherID'] != 0) {

    $teacherID = $_POST['teacherID'];
    $sql = "UPDATE `courses` SET `teacherID` = '$teacherID' WHERE `courses`.`courseID` = $courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

header('location: /selflearn/admin/courses?active=courses');

?>