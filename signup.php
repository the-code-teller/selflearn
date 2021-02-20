<?php

include "partials/_sessionHead.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $studentEmail = $_POST['studentEmail'];
    $studentFirstName = $_POST['studentFirstName'];
    $studentLastName = $_POST['studentLastName'];
    $studentPassword = $_POST['studentPassword'];
    $studentCPassword = $_POST['studentCPassword'];
    $studentAdminPassword = $studentPassword;
    
    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE studentEmail = '$studentEmail'";
    $result = mysqli_query($con, $existSql);
    $numExistRows = mysqli_num_rows($result);
    
    if($numExistRows > 0){
        echo "This Email ID already exists";
        header('location: index.php?signup=exists');
    } else{
        
        if($studentPassword == $studentCPassword){
            $hash = password_hash($studentPassword, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`studentEmail`, `studentFirstName`, `studentLastName`, `studentPassword`, `studentOccupation`, `studentDP`, `studentAdminPassword`) VALUES ('$studentEmail', '$studentFirstName', '$studentLastName', '$hash', '', '', '$studentAdminPassword')";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "Student Added";
                header('location: index.php?signup=success');
            }
        }
        else{
            echo "Passwords do not match";
            header('location: index.php?signup=unmatch');
        }
        
    }
}

if ($result) {
    echo "Yes";
} else {
    echo "No";
}

?>