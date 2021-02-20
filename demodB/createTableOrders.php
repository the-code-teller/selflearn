<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`orders` ( `orderID` INT NOT NULL AUTO_INCREMENT , `studentID` INT NOT NULL , `courseID` INT NOT NULL , `amount` INT NOT NULL , `orderDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `paymentStatus` TEXT NOT NULL , PRIMARY KEY (`orderID`), FOREIGN KEY(`studentID`) REFERENCES `users`(`studentID`), FOREIGN KEY(`courseID`) REFERENCES `courses`(`courseID`)) ENGINE = InnoDB";
if(mysqli_query($con, $sql)) {
    echo "Table 'orders' created<br>";
    
    echo "<a href='addTeachers.php'>Click to add Demo Teachers to 'teachers' Table</a>";
    
} else {
    echo "Table 'orders' could not be created";
}

?>