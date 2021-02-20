<?php

include "_connectDB.php";

session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
    $studentID = $_SESSION['studentID'];
    $studentEmail = $_SESSION['studentEmail'];
    $studentFirstName = $_SESSION['studentFirstName'];
    $studentLastName = $_SESSION['studentLastName'];
    $studentOccupation = $_SESSION['studentOccupation'];
    $studentDP = $_SESSION['studentDP'];
  } else{
    $loggedin = false;
}

?>