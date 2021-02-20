<?php

echo "<!-- Modal -->
    <div class='modal fade' id='updateTeacherModal$teacherID' tabindex='-1' aria-labelledby='updateTeacherModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateTeacherModalLabel'>Update Teacher</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";

                include "_updateTeacherForm.php";

                echo "</div>
            </div>
        </div>
    </div>";

?>