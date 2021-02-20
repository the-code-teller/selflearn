<?php

echo "<!-- Modal -->
    <div class='modal fade' id='deleteChapterModal$chapterID' tabindex='-1' aria-labelledby='deleteChapterModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='deleteChapterModalLabel'>Confirmation</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    echo "Are you sure you want to delete this Chapter <strong>$chapterTitle</strong>?";
                echo "</div>
                <div class='modal-footer'>
                    <form action='deleteChapter.php' method='post'>
                        <input type='hidden' name='chapterID' value='$chapterID'>
                        <input type='hidden' name='courseTableName' value='$courseTableName'>
                        <button type='submit' class='btn btn-danger'>Yes</button>
                    </form>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                </div>
            </div>
        </div>
    </div>";

?>