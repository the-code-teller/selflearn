<?php

include "../partials/_dbconnect.php";

if (isset($_GET['courseID'])) {
    $courseID = $_GET['courseID'];
}

if (isset($_POST['courseTableName'])) {
    $courseTableName = $_POST['courseTableName'];
}

if (isset($_POST['chapterID'])) {
    $chapterID = $_POST['chapterID'];
}

if(isset($_POST['chapterTitle']) && $_POST['chapterTitle'] != "") {

    $chapterTitle = $_POST['chapterTitle'];
    $sql = "UPDATE `$courseTableName` SET `chapterTitle` = '$chapterTitle' WHERE `chapterID` = $chapterID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}
else {
    echo "Chapter Title not set";
}

if(isset($_POST['chapterURL']) && $_POST['chapterURL'] != "") {

    $chapterURL = $_POST['chapterURL'];
    $sql = "UPDATE `$courseTableName` SET `chapterURL` = '$chapterURL' WHERE `chapterID` = $chapterID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
} else {
    echo "Chapter URL not set";
}

header('location: /selflearn/admin/chapters?active=chapters&courseID=$courseID');

?>