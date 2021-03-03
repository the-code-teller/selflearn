<?php

include "partials/_sessionHead.php";

$password = $_POST['password'];
$match = false;

$sql = "SELECT `studentPassword` from `users` WHERE `studentEmail`='$_SESSION"



?>