<?php

echo "<form action='addChapter.php?courseID=$courseID' method='post'>
    <input type='hidden' name='courseTableName' value='$courseTableName'>
    <div class='mb-3'>
        <label for='chapterTitle' class='form-label'>Chapter Title</label>
        <input type='text' class='form-control' id='chapterTitle' name='chapterTitle'>
    </div>
    <div class='mb-3'>
        <label for='chapterURL' class='form-label'>Chapter URL</label>
        <input type='text' class='form-control' id='chapterURL' name='chapterURL'>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Add Chapter</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>