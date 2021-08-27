<?php

include "../partials/_dbconnect.php";

if (isset($_GET['orderID'])) {
    $orderID = $_GET['orderID'];

    $sql = "SELECT * FROM `orders` WHERE `orderID`=$orderID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        
        $row = mysqli_fetch_assoc($result);
        $studentID = $row['studentID'];
        $courseID = $row['courseID'];
        
        if(isset($_POST['paymentStatus']) && $_POST['paymentStatus'] != "") {
            
            $paymentStatus = $_POST['paymentStatus'];
            $sql = "UPDATE `orders` SET `paymentStatus` = '$paymentStatus' WHERE `orders`.`orderID` = $orderID";
            $result = mysqli_query($con, $sql);
            
            if ($result) {

                if ($paymentStatus == 'SUCCESS') {

                    $sql = "INSERT INTO `student-course-junction` (`junctionID`, `studentID`, `courseID`) VALUES (NULL, $studentID, $courseID)";
                    $result = mysqli_query($con, $sql);

                } else {
                    
                    $sql = "DELETE FROM `student-course-junction` WHERE `studentID`=$studentID AND `courseID`=$courseID";
                    $result = mysqli_query($con, $sql);

                }
            }
        }
    }
}

header('location: /selflearn/admin/home/?active=home');

?>