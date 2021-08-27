<?php

include "../partials/_sessionHead.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_GET['courseID'])) {   
        $courseID = $_GET['courseID'];
    }
    $amount = $_POST['amount'];
    $paymentStatus = $_POST['paymentStatus'];

    // echo "course ID = $courseID<br>";
    // echo "student ID = $studentID<br>";
    // echo "amount = $amount<br>";
    // echo "Payment Status = $paymentStatus<br>";

    $sql = "INSERT INTO `orders` (`orderID`, `studentID`, `courseID`, `amount`, `orderDate`, `paymentStatus`) VALUES (NULL, '$studentID', '$courseID', '$amount', current_timestamp(), '$paymentStatus')";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $sql = "SELECT * FROM `orders` WHERE `studentID`='$studentID' AND `courseID`='$courseID' ORDER BY `orderID` DESC";
        $result = mysqli_query($con, $sql);

        if ($result) {
            
            $row = mysqli_fetch_assoc($result);
            $orderID = $row['orderID'];
            $paymentStatus = $row['paymentStatus'];

            if ($paymentStatus == "SUCCESS") {
                
                
                $sql = "INSERT INTO `student-course-junction` (`junctionID`, `studentID`, `courseID`) VALUES (NULL, '$studentID', '$courseID')";
                $result = mysqli_query($con, $sql);
            }
        }

    }
}

header("location: /selflearn/receipt?orderID=$orderID");

?>