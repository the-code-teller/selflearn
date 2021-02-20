<?php

echo "<!-- Modal -->
    <div class='modal fade' id='addTeacherModal' tabindex='-1' aria-labelledby='addTeacherModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='addTeacherModalLabel'>Fill Teacher Details</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_addTeacherForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>