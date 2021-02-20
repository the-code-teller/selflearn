<?php

include "_courseForChapterForm.php";

if (isset($_GET['courseID'])) {
    
    $courseID = $_GET["courseID"];
    $sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        
        $row = mysqli_fetch_assoc($result);
        $courseTitle = $row['courseTitle'];
        $courseTableName = $row['courseTableName'];
        
        echo "<h1 class='text-center text-success my-5'>$courseTitle</h1>";
        include "_chapterTable.php";
        
        include "_addChapterModal.php";
        echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#addChapterModal'><i class='bi bi-plus-square h3'></i></button>";
    }
}

?>