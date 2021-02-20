<?php include "../partials/_starterHead.php";

if(isset($_GET['paymentStatus']) && $_GET['paymentStatus'] == 'FAILURE'){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> Your Payment Failed.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

if (isset($_GET['courseID'])) {
    
    $courseID = $_GET['courseID'];
    
    include "_courseDetailsSQL.php";
    
}

include "../partials/_starterTail.php";

?>