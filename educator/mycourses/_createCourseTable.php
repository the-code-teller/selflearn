<?php

$sql = "CREATE TABLE `selflearn`.`$courseTableName` ( `chapterID` INT(7) NOT NULL AUTO_INCREMENT , `chapterTitle` TEXT NOT NULL , `chapterURL` TEXT NOT NULL , PRIMARY KEY (`chapterID`)) ENGINE = InnoDB;";
$result = mysqli_query($con, $sql);

?>