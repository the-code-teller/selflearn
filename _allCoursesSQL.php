<?php

$courseID = $row['courseID'];
$courseTitle = $row['courseTitle'];
// $courseDescription = $row['courseDescription'];
$coursePrice = $row['coursePrice'];
$courseDP = $row['courseDP'];
// $courseTableName = $row['courseTableName'];
$teacherID = $row['teacherID'];
    
$sql = "SELECT * FROM `teachers` WHERE `teacherID`='$teacherID'";
$res = mysqli_query($con, $sql);
    
if ($res) {
    
    $roT = mysqli_fetch_assoc($res);
    // $teacherID = $roT['teacherID'];
    $teacherName = $roT['teacherName'];
    $teacherDesignation = $roT['teacherDesignation'];
    
    include "_courseCard.php";

}

?>