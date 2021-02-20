<?php

echo "<!-- Modal -->
    <div class='modal fade' id='updateAdminModal' tabindex='-1' aria-labelledby='updateAdminModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateAdminModalLabel'>Update Information about yourself</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_updateAdminForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>