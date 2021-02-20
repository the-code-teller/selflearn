<?php

echo "<div class='container w-90 my-2 pt-4' id='feedbacks'>
    <h1 class='text-center text-success'>Students' Feedbacks</h1>
    <div class='row row-cols-1 row-cols-md-3 g-4 rounded-lg'>";

    $sql = "SELECT * FROM `feedbacks` ORDER BY `feedbackID` DESC";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        for ($i = 1; $i <= 3 && $row = mysqli_fetch_assoc($result); $i++) {

            // $feedbackID = $row['feedbackID'];
            $feedback = $row['feedback'];
            $studentID = $row['studentID'];

            $sql = "SELECT * FROM `users` WHERE  `studentID`=$studentID";
            $res = mysqli_query($con, $sql);
            $roF = mysqli_fetch_assoc($res);

            $studentFirstName = $roF['studentFirstName'];
            $studentLastName = $roF['studentLastName'];
            $studentOccupation = $roF['studentOccupation'];
            $studentDP = $roF['studentDP'];

            include "_feedbackCard.php";
        }
    }

    echo "</div>
</div>";

?>