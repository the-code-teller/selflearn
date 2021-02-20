<?php

echo "<!-- Modal -->
    <div class='modal fade' id='updateOrderModal$orderID' tabindex='-1' aria-labelledby='updateOrderModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateOrderModalLabel'>Update Order</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";

                include "_updateOrderForm.php";

                echo "</div>
            </div>
        </div>
    </div>";

?>