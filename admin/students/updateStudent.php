<?php

include "../partials/_dbconnect.php";

if (isset($_GET['studentID'])) {
    $studentID = $_GET['studentID'];
}

if(isset($_POST['studentFirstName']) && $_POST['studentFirstName'] != "") {

    $studentFirstName = $_POST['studentFirstName'];
    $sql = "UPDATE `users` SET `studentFirstName` = '$studentFirstName' WHERE `users`.`studentID` = $studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['studentLastName']) && $_POST['studentLastName'] != "") {

    $studentLastName = $_POST['studentLastName'];
    $sql = "UPDATE `users` SET `studentLastName` = '$studentLastName' WHERE `users`.`studentID` = $studentID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Yes";
    } else {
        echo "No";
    }
}

if(isset($_POST['studentPassword']) && $_POST['studentPassword'] != "") {

    $studentPassword = $_POST['studentPassword'];
    $studentCPassword = $_POST['studentCPassword'];
    $studentAdminPassword = $studentPassword;

    if($studentPassword == $studentCPassword){
        $hash = password_hash($studentPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `studentPassword` = '$hash', `studentAdminPassword` = '$studentAdminPassword' WHERE `users`.`studentID` = $studentID";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Student Password Updated";
            header('location: /selflearn/admin/students/?active=students?active=students&changePass=success');
        }
    }
    else{
        echo "Passwords do not match";
        header('location: /selflearn/admin/students/?active=students?active=students&changePass=unmatch');
    }
    
}

header('location: /selflearn/admin/students/?active=students?active=students');

?>