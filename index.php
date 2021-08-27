<?php

include 'partials/_starterHead.php';

include "_signupAlerts.php";

include "_loginAlerts.php";

echo "    <img src='img/selfLearn1.png' alt='Cover image' id='coverImg'>
<style>
    #coverImg {
        width : 100%;
        height : 600px;
    }
    @media only screen and (max-width: 600px) {
        #coverImg {
            height: 200px;
        }
    }
</style>";

if ($loggedin) {   
        include "_myCourses.php";
        include "_courses.php";
} else {
    include "_allCourses.php";
}

include 'partials/_starterTail.php';

?>