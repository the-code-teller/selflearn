<?php

echo "<!-- Modal -->
    <div class='modal fade' id='addCourseModal' tabindex='-1' aria-labelledby='addCourseModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='addCourseModalLabel'>Fill Course Details</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_addCourseForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>