<?php

echo "<div class='col col-lg-3 nav flex-column nav-pills me-3 ' id='v-pills-tab' role='tablist' aria-orientation='vertical'>";

if (isset($_GET['courseID'])) {

    $courseID = $_GET['courseID'];

    $sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $courseRow = mysqli_fetch_assoc($result);
        $courseTitle = $courseRow['courseTitle'];
        $courseDP = $courseRow['courseDP'];
        $teacherID = $courseRow['teacherID'];
        $courseTableName = $courseRow['courseTableName'];

        echo "<h3 class='text-center text-success mt-3'>$courseTitle</h3>";
        echo "<div class='border-0 mb-2' style='width: 16rem;'>
            <img src='../admin/$courseDP' class='img-thumbnail mx-5 my-2' alt='...' height='300px'>
        </div>";

        $sql = "SELECT * FROM `$courseTableName`";
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            
            while ($chapterRow = mysqli_fetch_assoc($result)){
                
                $chapterID = $chapterRow['chapterID'];
                $chapterTitle = $chapterRow['chapterTitle'];
                // $chapterURL = $chapterRow['chapterURL'];


                echo "<a class='nav-link ";
                if ($active == $chapterID) {
                    echo "active";
                }
                echo "' href='/selflearn/chapter/?courseID=$courseID&active=$chapterID' role='tab' aria-controls='v-pills-$chapterID' aria-selected='true'>$chapterTitle</a>";
            }
        
        }
        
    }

}

echo "</div>";

?>