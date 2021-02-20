<?php

echo "<!-- Modal -->
    <div class='modal' id='updateMyProfileModal' tabindex='-1' aria-labelledby='updateMyProfileModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateMyProfileModalLabel'>Update My Profile</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_updateMyProfileForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>