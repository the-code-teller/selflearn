<?php

include "../partials/_dbconnect.php";

if (isset($_GET['orderID'])) {
    $orderID = $_GET['orderID'];
}

$sql = "DELETE FROM `orders` WHERE `orderID` = $orderID";
$result = mysqli_query($con, $sql);

header('location: /selflearn/admin/home/');

?>