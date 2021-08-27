<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "partials/_sessionHeadAdmin.php";
  
    $adminOldPassword = $_POST['adminOldPassword'];
    $adminNewPassword = $_POST['adminNewPassword'];
    $adminNewCPassword = $_POST['adminNewCPassword'];
  
    $sql = "SELECT * FROM `admins` WHERE `adminID`=$adminID";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if(password_verify($adminOldPassword, $row['adminPassword'])){
        
        if($adminNewPassword == $adminNewCPassword){
            $hash = password_hash($adminNewPassword, PASSWORD_DEFAULT);
            $sql = "UPDATE `admins` SET `adminPassword` = '$hash' WHERE `adminID` = $adminID";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "Password Changed Successfully! Please Login again to continue.";
                header("location: logout.php");
            }
        }
        else{
            header('location: /selflearn/admin/home/?changePass=unmatch');
        }
    
    } else {
        header("location: /selflearn/admin/home/?changePass=wrong");
    }
}

?>