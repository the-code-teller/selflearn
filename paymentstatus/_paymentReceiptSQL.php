<?php

if (isset($_POST['orderID']) && $_POST['orderID'] != "") {
    $orderID = $_POST['orderID'];

    $sql = "SELECT * FROM `orders` WHERE `orderID`=$orderID";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $nor = mysqli_num_rows($result);

        if($nor != 0) {

            
            $row = mysqli_fetch_assoc($result);
            
            $courseID = $row['courseID'];
            $amount = $row['amount'];
            $orderDate = $row['orderDate'];
            $paymentStatus = $row['paymentStatus'];
            
            $sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                
                $row = mysqli_fetch_assoc($result);
                
                $courseTitle = $row['courseTitle'];
                
                include "_paymentReceipt.php";
                
            }
        } else {
            echo "<div class='alert alert-warning alert-dismissable fade show d-flex justify-content-between' role='alert'>
            Please check the Order ID again
            <button type='button' class='btn-close float-right' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
    } 
}

?>