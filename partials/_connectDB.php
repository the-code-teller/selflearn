<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "selflearn";

$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    echo "Connection failed";
}

?>