<?php

if (isset($_GET['tableName'])) {
    $tableName = $_GET['tableName'];
    $sql = "DROP TABLE `$tableName`";
    $result = mysqli_query($con, $sql);
}

?>