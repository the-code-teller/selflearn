<?php

$sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
$result = mysqli_query($con, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);
        
    $courseID = $row['courseID'];
    $courseTitle = $row['courseTitle'];
    $courseDescription = $row['courseDescription'];
    $coursePrice = $row['coursePrice'];
    $courseDP = $row['courseDP'];
    $courseTableName = $row['courseTableName'];
    $teacherID = $row['teacherID'];

    $sql = "SELECT * FROM `teachers` WHERE `teacherID`='$teacherID'";
    $res = mysqli_query($con, $sql);

    if ($res) {

        $roT = mysqli_fetch_assoc($res);
        // $teacherID = $roT['teacherID'];
        $teacherName = $roT['teacherName'];
        $teacherDesignation = $roT['teacherDesignation'];

        include "_courseDetailsCard.php";

        echo "<div class='container'>";
            include "_chapterTable.php";
        echo "</div>";

    }
}

?>