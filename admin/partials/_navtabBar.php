<?php

echo "<div class='nav flex-column nav-pills me-3 my-4' id='v-pills-tab' role='tablist' aria-orientation='vertical'>";

    echo "<a class='nav-link ";
    if ($active == "home") {
        echo "active";
    }
    echo "' href='/selflearn/admin/home?active=home' role='tab' aria-controls='v-pills-home' aria-selected='true'>Home</a>";

    echo "<a class='nav-link ";
    if ($active == "courses") {
        echo "active";
    }
    echo "' href='/selflearn/admin/courses?active=courses' role='tab' aria-controls='v-pills-courses' aria-selected='false'>Courses</a>";

    echo "<a class='nav-link ";
    if ($active == "chapters") {
        echo "active";
    }
    echo "'  href='/selflearn/admin/chapters?active=chapters' role='tab' aria-controls='v-pills-chapters' aria-selected='false'>Chapters</a>";

    echo "<a class='nav-link ";
    if ($active == "students") {
        echo "active";
    }
    echo "'  href='/selflearn/admin/students?active=students' role='tab' aria-controls='v-pills-students' aria-selected='false'>Students</a>";

    echo "<a class='nav-link ";
    if ($active == "teachers") {
        echo "active";
    }
    echo "'  href='/selflearn/admin/teachers?active=teachers' role='tab' aria-controls='v-pills-teachers' aria-selected='false'>Teachers</a>";

    echo "<a class='nav-link ";
    if ($active == "studentCourseJunction") {
        echo "active";
    }
    echo "'  href='/selflearn/admin/studentCourseJunction?active=studentCourseJunction' role='tab' aria-controls='v-pills-studentCourseJunction' aria-selected='false'>Student-Course Junction</a>";

    echo "<a class='nav-link ";
    if ($active == "feedbacks") {
        echo "active";
    }
    echo "'  href='/selflearn/admin/feedbacks?active=feedbacks' role='tab' aria-controls='v-pills-feedbacks' aria-selected='false'>Feedbacks</a>";

    echo "<a class='nav-link ";
    if ($active == "changePassword") {
        echo "active";
    }
    echo "' data-bs-toggle='modal' data-bs-target='#changeAdminPasswordModal' href='changePassword.php?active=changePassword' role='tab' aria-controls='v-pills-changePassword' aria-selected='false'>Change Password</a>";

    echo "<a class='nav-link ";
    if ($active == "addAdmin") {
        echo "active";
    }
    echo "' data-bs-toggle='modal' data-bs-target='#addAdminModal' href='addAdmin.php?active=addAdmin' role='tab' aria-controls='v-pills-addAdmin' aria-selected='false'>Add Admin</a>";

    // echo "<a class='nav-link ";
    // if ($active == "logout") {
    //     echo "active";
    // }
    // echo "'  href='logout.php?active=logout' role='tab' aria-controls='v-pills-logout' aria-selected='false'>Logout</a>";

echo "</div>";

include "_changeAdminPasswordModal.php";
include "_addAdminModal.php";

?>