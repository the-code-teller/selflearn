<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`teachers` ( `teacherID` INT NOT NULL AUTO_INCREMENT , `teacherName` VARCHAR(255) NOT NULL , `teacherDesignation` VARCHAR(255) NOT NULL , PRIMARY KEY (`teacherID`)) ENGINE = InnoDB;";
if(mysqli_query($con, $sql)) {
    echo "Table 'teachers' created<br>";
    
    echo "<a href='createTableCourses.php'>Click to create 'courses' Table</a>";
    
} else {
    echo "Table 'teachers' could not be created";
}

?>