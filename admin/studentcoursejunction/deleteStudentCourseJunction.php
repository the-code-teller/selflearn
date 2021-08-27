<?php

include "../partials/_dbconnect.php";

if (isset($_GET['studentCourseJunctionID'])) {
    $studentCourseJunctionID = $_GET['studentCourseJunctionID'];
}
    
$sql = "DELETE FROM `student-course-junction` WHERE `student-course-junction`.`junctionID` = $studentCourseJunctionID";
$result = mysqli_query($con, $sql);
    
header('location: /selflearn/admin/studentcoursejunction/?active=studentCourseJunction');


?>