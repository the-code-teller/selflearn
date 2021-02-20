<?php

echo "<div class='tab-content my-3' id='v-pills-tabContent'>";

    if ($active == "home") {
        echo "<div class='tab-pane fade show active' id='v-pills-home' role='tabpanel' aria-labelledby='v-pills-home-tab'>";
        include "../home/_home.php";
        echo "</div>";
    }
        
    if ($active == "courses") {
        echo "<div class='tab-pane fade show active' id='v-pills-courses' role='tabpanel' aria-labelledby='v-pills-courses-tab'>";
            include "../courses/_courses.php";
        echo "</div>";
    }
        
    if ($active == "chapters") {
        echo "<div class='tab-pane fade show active' id='v-pills-chapters' role='tabpanel' aria-labelledby='v-pills-chapters-tab'>";
            include "../chapters/_chapters.php";
        echo "</div>";
    }
        
    if ($active == "students") {
        echo "<div class='tab-pane fade show active' id='v-pills-students' role='tabpanel' aria-labelledby='v-pills-students-tab'>";
            include "../students/_students.php";
        echo "</div>";
    }
        
    if ($active == "teachers") {
        echo "<div class='tab-pane fade show active' id='v-pills-teachers' role='tabpanel' aria-labelledby='v-pills-teachers-tab'>";
            include "../teachers/_teachers.php";
        echo "</div>";
    }
        
    if ($active == "studentCourseJunction") {
        echo "<div class='tab-pane fade show active' id='v-pills-studentCourseJunction' role='tabpanel' aria-labelledby='v-pills-studentCourseJunction-tab'>";
            include "../studentcoursejunction/_studentCourseJunction.php";
        echo "</div>";
    }
       
    if ($active == "feedbacks") {
        echo "<div class='tab-pane fade show active' id='v-pills-feedbacks' role='tabpanel' aria-labelledby='v-pills-feedbacks-tab'>";
            include "../feedbacks/_feedbackTable.php";
        echo "</div>";
    }
        
    if ($active == "changePassword") {
        echo "<div class='tab-pane fade show active' id='v-pills-changePassword' role='tabpanel' aria-labelledby='v-pills-changePassword-tab'>";
        echo "</div>";
    }
        
echo "</div>";

?>