<?php

echo "<form action='/selflearn/coursedetails/order.php?courseID=$courseID' method='post'>
    <div class='mb-3 row'>
        <label for='studentEmail' class='col-sm-2 col-form-label'>E-mail :</label>
        <div class='col-sm-10'>
            <input type='email' readonly class='form-control-plaintext' id='studentEmail' name='studentEmail' value='$studentEmail'>
        </div>
    </div>
    <div class='mb-3 row'>
        <label for='courseTitle' class='col-sm-2 col-form-label'>Course Title</label>
        <div class='col-sm-10'>
            <input type='text' readonly class='form-control-plaintext' id='courseTitle' name='courseTitle' value='$courseTitle'>
        </div>
    </div>
    <div class='mb-3 row'>
        <label for='amount' class='col-sm-2 col-form-label'>Amount</label>
        <div class='col-sm-10'>
            <input type='text' readonly class='form-control-plaintext' id='amount' name='amount' value='$coursePrice'>
        </div>
    </div>
    <div class='mb-3'>
        <label for='paymentStatus' class='form-label'>Select Payment Status </label>
        <div class='form-check-inline'>
        <label class='form-check-label' for='success'>
            <input type='radio' class='form-check-input' id='success' name='paymentStatus' value='SUCCESS' checked>SUCCESS
        </label>
        </div>
        <div class='form-check-inline'>
        <label class='form-check-label' for='failure'>
            <input type='radio' class='form-check-input' id='failure' name='paymentStatus' value='FAILURE'>FAILURE
        </label>
        </div>
        </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Submit</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>