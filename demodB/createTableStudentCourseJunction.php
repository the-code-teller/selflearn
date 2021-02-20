<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`student-course-junction` ( `junctionID` INT NOT NULL AUTO_INCREMENT , `studentID` INT NOT NULL , `courseID` INT NOT NULL , PRIMARY KEY (`junctionID`), FOREIGN KEY (`studentID`) REFERENCES `users` (`studentID`), FOREIGN KEY (`courseID`) REFERENCES `courses` (`courseID`)) ENGINE = InnoDB";
if(mysqli_query($con, $sql)) {
    echo "Table 'student-course-junction' created<br>";
    echo "<a href='createTableAdmins.php'>Click to create 'admins' Table</a>";
    
} else {
    echo "Table 'student-course-junction' could not be created";
}

?>