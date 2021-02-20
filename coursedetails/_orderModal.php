<?php

echo "<!-- Modal -->
    <div class='modal fade' id='orderModal' tabindex='-1' aria-labelledby='orderModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='orderModalLabel'>Order Details</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_orderForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>