<?php

include "../partials/_connectDB.php";

$sql = "INSERT INTO `teachers` (`teacherID`, `teacherName`, `teacherDesignation`) VALUES (NULL, 'Ashutosh Sharma', 'Game Developer');";
mysqli_query($con, $sql);

$sql = "INSERT INTO `teachers` (`teacherID`, `teacherName`, `teacherDesignation`) VALUES (NULL, 'Code With Harry', 'You Tuber');";
mysqli_query($con, $sql);

$sql = "INSERT INTO `teachers` (`teacherID`, `teacherName`, `teacherDesignation`) VALUES (NULL, 'Akshay Saini', 'Engineer at Uber');";
if(mysqli_query($con, $sql)) {
    echo "Demo Teachers added<br>";

    echo "<a href='addCourseTables.php'>Click to add Demo Course Tables to the database</a>";
} else {
    echo "Demo Teachers could not be added";
}

?>