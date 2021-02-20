<?php

include "../partials/_sessionHead.php";

if($loggedin) {

    if(isset($_POST['feedback']) && $_POST['feedback'] != "") {
        
        $feedback = $_POST['feedback'];
        
        $sql = "INSERT INTO `feedbacks` (`feedbackID`, `studentID`, `feedback`) VALUES (NULL, '$studentID', '$feedback')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("location: index.php?feedback=success");
        } else {
            header("location: index.php?feedback=failure");
        }
        
    }
}

?>