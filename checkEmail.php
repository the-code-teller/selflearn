<?php

include "partials/_sessionHead.php";

$match = false;

if (isset($_GET['w']) && $_GET['w'] == 1) {
    $email = $_POST['email'];
    $sql = "SELECT `studentEmail` from `users`";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (strcmp($email, $row['studentEmail']) == 0) {
                $match = true;
                break;
            }
        }
    }

    if ($match == false) {
        echo "Invalid Email";
    }
} else {

    $password = $_POST['password'];
    $email = $_GET['email'];

    $sql = "SELECT `studentPassword` from `users` WHERE `studentEmail`='$email'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['studentPassword'])) {
        $match = true;
    }

    if ($match == false) {
        echo "Wrong Password";
    }

}

?>