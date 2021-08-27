<?php

$activeDecoration = "bg-dark text-white";

if (isset($_GET['active'])) {
    
    echo "<div class='col-sm-2'>
        <ul class='list-group'>
            <a href='/selflearn/educator/profile?active=myProfile' class='list-group-item list-group-item-action list-group-item-dark "; if($_GET['active'] == "myProfile") { echo $activeDecoration; } echo "'>My Profile</a>
            <a href='/selflearn/educator/mycourses?active=myCourses' class='list-group-item list-group-item-action list-group-item-dark "; if($_GET['active'] == "myCourses") { echo $activeDecoration; } echo "'>My Courses</a>
            <a href='/selflearn/educator/chapters?active=chapters' class='list-group-item list-group-item-action list-group-item-dark "; if($_GET['active'] == "chapters") { echo $activeDecoration; } echo "'>My Chapters</a>
            <a href='#' class='list-group-item list-group-item-action list-group-item-dark'>Change Password</a>
            <a href='#' class='list-group-item list-group-item-action list-group-item-dark'>Logout</a>
        </ul>
    </div>";
}

?>