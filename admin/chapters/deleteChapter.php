<?php

include "../partials/_dbconnect.php";

if (isset($_GET['courseID'])) {
    $courseID = $_GET['courseID'];
}
if (isset($_POST['chapterID'])) {
    $chapterID = $_POST['chapterID'];
}

if (isset($_POST['courseTableName'])) {
    $courseTableName = $_POST['courseTableName'];
}

$sql = "DELETE FROM `$courseTableName` WHERE `chapterID` = $chapterID";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/chapters?active=chapters&courseID=$courseID');

?>