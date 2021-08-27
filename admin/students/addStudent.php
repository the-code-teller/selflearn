<?php

include "../partials/_dbconnect.php";

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
    // $numExistRows = mysqli_num_rows($result);
    
    if($result){
        header('location: /selflearn/students/?active=students?addStudent=exists');
    } else{
        
        if($studentPassword == $studentCPassword){
            $hash = password_hash($studentPassword, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`studentEmail`, `studentFirstName`, `studentLastName`, `studentPassword`, `studentOccupation`, `studentDP`, `studentAdminPassword`) VALUES ('$studentEmail', '$studentFirstName', '$studentLastName', '$hash', '', '', '$studentAdminPassword')";
            $result = mysqli_query($con, $sql);
        }
        else{
            header('location: /selflearn/students/?active=students?addStudent=unmatch');
        }
        
    }
}

if ($result) {
    echo "Yes";
} else {
    echo "No";
}

header('location: /selflearn/admin/students/?active=students');

?>