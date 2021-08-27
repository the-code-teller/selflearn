<?php

include "../partials/_dbconnect.php";

$courseTitle = $_POST['courseTitle'];
$courseDescription = $_POST['courseDescription'];
$coursePrice = $_POST['coursePrice'];
$courseDP = $_FILES['courseDP'];
$courseTableName = $_POST['courseTableName'];
$teacherID = $_POST['teacherID'];

include "_createCourseTable.php";

if ($result) {
    
    $imgName = $courseDP['name'];
    
    $sql = "INSERT INTO `courses` (`courseID`, `courseTitle`, `courseDescription`, `coursePrice`, `courseDP`, `courseTableName`, `teacherID`) VALUES (NULL, '$courseTitle', '$courseDescription', '$coursePrice', '$imgName', '$courseTableName', '$teacherID');";
    $result = mysqli_query($con, $sql);
    
    move_uploaded_file($courseDP['tmp_name'], "/selflearn/admin/img/".$imgName);

}

header('location: /selflearn/admin/courses?active=courses');

?>