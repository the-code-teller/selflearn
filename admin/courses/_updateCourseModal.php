<?php

echo "<!-- Modal -->
    <div class='modal fade' id='updateCourseModal$courseID' tabindex='-1' aria-labelledby='updateCourseModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateCourseModalLabel'>Update Course</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                // echo $courseID;

                include "_updateCourseForm.php";

                echo "</div>
            </div>
        </div>
    </div>";

?>