<?php

include "_dbconnect.php";

session_start();

if(isset($_SESSION['adminLoggedin']) && $_SESSION['adminLoggedin'] == true){
    $adminLoggedin = true;
    $adminID = $_SESSION['adminID'];
    $adminName = $_SESSION['adminName'];
  } else{
    $adminLoggedin = false;
}

?>