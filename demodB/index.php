<?php

$con = mysqli_connect('localhost', 'root');
if (!$con) {
    echo "Connection failed";
}

$sql = "CREATE DATABASE selflearn";
if(mysqli_query($con, $sql)){
    echo "Database created<br>";
    
    echo "<a href='createTableUsers.php'>Click to create 'users' Table</a>";

} else {
    echo "Database NOT created";
}

?>