<?php

echo "<!-- Modal -->
    <div class='modal fade' id='addStudentCourseJunctionModal' tabindex='-1' aria-labelledby='addStudentCourseJunctionModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='addStudentCourseJunctionModalLabel'>Fill Student Course Junction Details</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_addStudentCourseJunctionForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>