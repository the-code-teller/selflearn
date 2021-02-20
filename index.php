<?php

include 'partials/_starterHead.php';

include "_signupAlerts.php";

include "_loginAlerts.php";

echo "<img src='img/selfLearn1.png' alt='Cover image' class='img-fluid'>";

if ($loggedin) {   
        include "_myCourses.php";
        include "_courses.php";
} else {
    include "_allCourses.php";
}

include 'partials/_starterTail.php';

?>