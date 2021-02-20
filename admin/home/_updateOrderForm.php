<?php

echo "<form action='updateOrder.php?orderID=$orderID' method='post'>
    <div class='mb-3'>
        <label for='paymentStatus' class='form-label'>Payment Status </label>
        <select name='paymentStatus' id='paymentStatus'>
            <option value = 'SUCCESS'>SUCCESS</option>
            <option value = 'FAILURE'>FAILURE</option>
        </select>    
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Apply Changes</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>