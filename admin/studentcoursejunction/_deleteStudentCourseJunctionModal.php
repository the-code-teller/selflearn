<?php

echo "<!-- Modal -->
    <div class='modal fade' id='deleteStudentCourseJunctionModal$studentCourseJunctionID' tabindex='-1' aria-labelledby='deleteStudentCourseJunctionModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='deleteStudentCourseJunctionModalLabel'>Confirmation</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    echo "Are you sure you want to delete this Student-Course Junction?";
                echo "</div>
                <div class='modal-footer'>
                    <form action='deleteStudentCourseJunction.php?studentCourseJunctionID=$studentCourseJunctionID' method='post'>
                        <button type='submit' class='btn btn-danger'>Yes</button>
                    </form>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                </div>
            </div>
        </div>
    </div>";

?>