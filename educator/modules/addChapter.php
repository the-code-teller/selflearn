<?php

include "../partials/_dbconnect.php";

if (isset($_GET['courseID'])) {
    $courseID = $_GET['courseID'];
}

if(isset($_POST['courseTableName'])){
    $courseTableName = $_POST['courseTableName'];
}

$chapterTitle = $_POST['chapterTitle'];
$chapterURL = $_POST['chapterURL'];

$sql = "INSERT INTO `$courseTableName` (`chapterID`, `chapterTitle`, `chapterURL`) VALUES (NULL, '$chapterTitle', '$chapterURL');";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/chapters?active=chapters&courseID=$courseID')

?>