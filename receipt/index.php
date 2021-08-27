<?php

include "../partials/_starterHead.php";

if ($loggedin) {
    
    if (isset($_GET['orderID']) && $_GET['orderID'] != "") {
        $orderID = $_GET['orderID'];

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
                    
                    echo "<h1 class ='text-center mt-5'>Order Receipt</h1>";
                    echo "<h5 class='text-center'>Please note the Order ID for future reference</h5>";
                    echo "<div class='container mb-5 p-5'>";
                    
                        include "_paymentReceipt.php";

                        if ($paymentStatus == 'SUCCESS') {
                            echo "<div class='text-center my-5'>
                                <a href='/selflearn/coursedetails/?courseID=$courseID' type='button' class='btn btn-success'>Go to Course</a>
                            </div>";
                        }
                    echo "</div>";
                    
                }
            }
        } 
    }
}

include "../partials/_starterTail.php";

?>