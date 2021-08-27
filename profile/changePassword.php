<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "../partials/_sessionHead.php";
  
    $studentOldPassword = $_POST['studentOldPassword'];
    $studentNewPassword = $_POST['studentNewPassword'];
    $studentNewCPassword = $_POST['studentNewCPassword'];
  
    $sql = "SELECT * FROM `users` WHERE `studentID`=$studentID";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if(password_verify($studentOldPassword, $row['studentPassword'])){
        
        if($studentNewPassword == $studentNewCPassword){
            $hash = password_hash($studentNewPassword, PASSWORD_DEFAULT);
            $sql = "UPDATE `users` SET `studentPassword` = '$hash', `studentAdminPassword` = '$studentNewPassword' WHERE `studentID` = $studentID";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "Password Changed Successfully! Please Login again to continue.";
                header("location: /selflearn/logout.php");
            }
        }
        else{
            header('location: /selflearn/profile/?active=myProfile&changePass=unmatch');
        }
    
    } else {
        header("location: /selflearn/profile/?active=myProfile&changePass=wrong");
    }
}

?>