<?php

echo "<!-- Modal -->
    <div class='modal fade' id='courseDescriptionModal$courseID' tabindex='-1' aria-labelledby='courseDescriptionModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='courseDescriptionModalLabel'>$courseTitle</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>$courseDescription</div>
            </div>
        </div>
    </div>";

?>