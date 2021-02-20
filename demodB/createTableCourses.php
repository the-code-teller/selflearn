<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`courses` ( `courseID` INT NOT NULL AUTO_INCREMENT , `courseTitle` VARCHAR(250) NOT NULL , `courseDescription` TEXT NOT NULL , `coursePrice` INT NOT NULL , `courseDP` VARCHAR(250) NOT NULL , `courseTableName` VARCHAR(250) NOT NULL , `teacherID` INT NOT NULL , PRIMARY KEY (`courseID`), FOREIGN KEY(`teacherID`) REFERENCES `teachers`(`teacherID`)) ENGINE = InnoDB";
if(mysqli_query($con, $sql)) {
    echo "Table 'courses' created<br>";
    
    echo "<a href='createTableOrders.php'>Click to create 'orders' Table</a>";
    
} else {
    echo "Table 'courses' could not be created";
}

?>