<?php

echo "<div class='col-3 nav flex-column nav-pills me-3' id='v-pills-tab' role='tablist' aria-orientation='vertical'>";

    echo "<div class='border-0 my-2' style='width: 10rem;'>
        <img src='/selflearn.com/img/$studentDP' class='img-thumbnail m-5 mt-5' alt='...'>
    </div>";
    // <h3 class='text-center mb-5'>$studentFirstName $studentLastName</h3>";

    echo "<a class='nav-link ";
    if ($active == "myProfile") {
        echo "active";
    }
    echo "' href='/selflearn.com/profile' role='tab' aria-controls='v-pills-myProfile' aria-selected='true'>My Profile</a>";

    echo "<a class='nav-link ";
    if ($active == "myCourses") {
        echo "active";
    }
    echo "' href='/selflearn.com/mycourses' role='tab' aria-controls='v-pills-myCourses' aria-selected='false'>My Courses</a>";

    echo "<a class='nav-link ";
    if ($active == "paymentStatus") {
        echo "active";
    }
    echo "' href='/selflearn.com/paymentstatus' role='tab' aria-controls='v-pills-paymentStatus' aria-selected='false'>Payment Status</a>";

    echo "<a class='nav-link ";
    if ($active == "feedbacks") {
        echo "active";
    }
    echo "' data-bs-toggle='modal' data-bs-target='#feedbackModal' href='#' role='tab' aria-controls='v-pills-feedbacks' aria-selected='false'>Send Feedback</a>";

    echo "<a class='nav-link ";
    if ($active == "changePassword") {
        echo "active";
    }
    echo "' data-bs-toggle='modal' data-bs-target='#changePasswordModal' href='#' role='tab' aria-controls='v-pills-changePassword' aria-selected='false'>Change Password</a>";

echo "</div>";

include "_feedbackModal.php";
include "_changePasswordModal.php";

?>