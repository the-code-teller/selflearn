<?php

include "partials/_dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $adminName = $_POST['adminName'];
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPassword'];
    $adminCPassword = $_POST['adminCPassword'];
    
    // Check whether this username exists
    $existSql = "SELECT * FROM `admins` WHERE adminUsername = '$adminUsername'";
    $result = mysqli_query($con, $existSql);
    // $numExistRows = mysqli_num_rows($result);
    
    if($result){

        $nor = mysqli_num_rows($result);
        
        if ($nor > 0) {

            header('location: /selflearn/admin/home/?addAdmin=exists');
        } else{
            
            if($adminPassword == $adminCPassword){
                $hash = password_hash($adminPassword, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `admins` (`adminID`, `adminName`, `adminUsername`, `adminPassword`) VALUES ('$adminID', '$adminName', '$adminUsername', '$hash')";
                $result = mysqli_query($con, $sql);
                if($result){
                    header('location: /selflearn/admin/home/?addAdmin=success');
                }
            }
            else{
                header('location: /selflearn/admin/home/?addAdmin=unmatch');
            }
            
        }
    }
}

?>