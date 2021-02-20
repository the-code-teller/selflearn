<?php

echo "<form action='index.php' method='post'>
    <div class='row my-4'>
        <div class='mb-3 col-2 my-2'>
            <label for='orderID' class='form-label'>Enter Order ID</label>
        </div>
        <div class='mb-3 col'>
            <input type='text' class='form-control' id='orderID' name='orderID'>
        </div>
        <div class='mb-3 col'>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </div>
    </div>
</form>";

?>