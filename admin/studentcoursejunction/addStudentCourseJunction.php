<?php

include "../partials/_dbconnect.php";

$studentID = $_POST['studentID'];
$courseID = $_POST['courseID'];

$sql = "INSERT INTO `student-course-junction` (`junctionID`, `studentID`, `courseID`) VALUES (NULL, '$studentID', '$courseID');";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/studentcoursejunction/?active=studentCourseJunction');


?>