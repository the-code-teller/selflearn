<?php

include "_connectDB.php";

session_start();

if (isset($_SESSION['educatorLoggedIn']) && $_SESSION['educatorLoggedIn']) {
    $educatorLoggedIn = true;
    $educatorID = $_SESSION['educatorID'];
    $educatorFirstName = $_SESSION['educatorFirstName'];
    $educatorLastName = $_SESSION['educatorLastName'];
    $educatorDesignation = $_SESSION['educatorDesignation'];
    $educatorEmail = $_SESSION['educatorEmail'];
} else {
    $educatorLoggedIn = false;
}

?>