<?php

// $junctionID = $row['junctionID'];
$courseID = $row['courseID'];

$sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
$res = mysqli_query($con, $sql);

if ($res) {

    $roC = mysqli_fetch_assoc($res);
            
    $courseTitle = $roC['courseTitle'];
    // $courseDescription = $roC['courseDescription'];
    // $coursePrice = $roC['coursePrice'];
    $courseDP = $roC['courseDP'];
    // $courseTableName = $roC['courseTableName'];
    $teacherID = $roC['teacherID'];

    $sql = "SELECT * FROM `teachers` WHERE `teacherID`='$teacherID'";
    $reT = mysqli_query($con, $sql);

    if ($reT) {

        $roT = mysqli_fetch_assoc($reT);
        // $teacherID = $roT['teacherID'];
        $teacherName = $roT['teacherName'];
        $teacherDesignation = $roT['teacherDesignation'];

        include "_myCourseCard.php";
        
    }

}

?>