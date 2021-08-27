<?php

include "../partials/_connectDB.php";

$sql = "CREATE TABLE `selflearn`.`admins` ( `adminID` INT NOT NULL AUTO_INCREMENT , `adminName` VARCHAR(255) NOT NULL , `adminUsername` VARCHAR(255) NOT NULL , `adminPassword` VARCHAR(255) NOT NULL, PRIMARY KEY (`adminID`)) ENGINE = InnoDB";
if(mysqli_query($con, $sql)) {
    echo "Table 'admins' created<br>";

    $hash = password_hash('admin', PASSWORD_DEFAULT);
    $sql = "INSERT INTO `admins` (`adminID`, `adminName`, `adminUsername`, `adminPassword`) VALUES (NULL, 'Admin', 'admin', '$hash');";
    
    if (mysqli_query($con, $sql)) {
        echo "Default Admin Added<br>Username : admin<br>Password : admin";
        echo "<h1>All Set!</h1>";
    }

    echo "<a href='/selflearn/'>Click to jump to selflearn Home Page</a>";

} else {
    echo "Table 'admins' could not be created";
}

?>