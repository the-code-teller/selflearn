<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`feedbacks` ( `feedbackID` INT NOT NULL AUTO_INCREMENT , `studentID` INT NOT NULL , `feedback` TEXT NOT NULL , PRIMARY KEY (`feedbackID`), FOREIGN KEY (`studentID`) REFERENCES `users`(`studentID`)) ENGINE = InnoDB";
if(mysqli_query($con, $sql)) {
    echo "Table 'feedbacks' created<br>";
    echo "<a href='createTableStudentCourseJunction.php'>Click to create 'orders' Table</a>";
    
} else {
    echo "Table 'feedbacks' could not be created";
}

?>