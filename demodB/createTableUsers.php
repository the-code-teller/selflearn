<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`users` ( `studentID` INT NOT NULL AUTO_INCREMENT , `studentEmail` VARCHAR(250) NOT NULL , `studentFirstName` VARCHAR(250) NOT NULL , `studentLastName` VARCHAR(250) NOT NULL , `studentPassword` VARCHAR(250) NOT NULL , `studentOccupation` VARCHAR(250) NOT NULL , `studentDP` VARCHAR(255) NOT NULL , `studentAdminPassword` VARCHAR(250) NOT NULL , PRIMARY KEY (`studentID`), UNIQUE `studentEmail` (`studentEmail`)) ENGINE = InnoDB;";
if(mysqli_query($con, $sql)) {
    echo "Table 'users' created<br>";
    
    echo "<a href='createTableTeachers.php'>Click to create 'teachers' Table</a>";
    
} else {
    echo "Table 'users' could not be created";
}

?>