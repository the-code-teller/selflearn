<?php

$server = "sql213.epizy.com	";
$username = "epiz_29112081";
$password = "5rPhdjqpxqB9";
$dbname = "epiz_29112081_selflearn";

$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    echo "Connection failed";
}

?>