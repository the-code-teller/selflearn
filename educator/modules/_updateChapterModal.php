<?php

echo "<!-- Modal -->
    <div class='modal fade' id='updateChapterModal$chapterID' tabindex='-1' aria-labelledby='updateChapterModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateChapterModalLabel'>update Chapter</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";

                include "_updateChapterForm.php";

                echo "</div>
            </div>
        </div>
    </div>";

?>