<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "partials/_dbconnect.php";
  
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPassword'];
  
    $sql = "SELECT * FROM `admins` WHERE `adminUsername`='$adminUsername'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($adminPassword, $row['adminPassword'])){
            session_start();
            $_SESSION['adminLoggedin'] = true;
            $_SESSION['adminID'] = $row['adminID'];
            $_SESSION['adminUsername'] = $adminUsername;
            $_SESSION['adminName'] = $row['adminName'];

            header("location: /selflearn/admin/home");
        } else{
            header("location: /selflearn/admin?login=wrongPass");
        }
    } else {
        header("location: /selflearn/admin?login=notExists");
    }
}

?>