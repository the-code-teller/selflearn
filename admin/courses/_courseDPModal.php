<?php

echo "<!-- Modal -->
    <div class='modal fade' id='courseDPModal$courseID' tabindex='-1' aria-labelledby='courseDPModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='courseDPModalLabel'>$courseTitle</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <img src='/selflearn/admin/img/$courseDP' alt='Course Thumbnail' height='300px'>
                <div class='modal-body'>$courseDP</div>
            </div>
        </div>
    </div>";

?>