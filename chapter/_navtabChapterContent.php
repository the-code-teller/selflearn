<?php


if (isset($_GET['courseID'])) {
    
    echo "<div class='col tab-content' id='v-pills-tabContent'>";

    $courseID = $_GET['courseID'];

    $sql = "SELECT * FROM `courses` WHERE `courseID`=$courseID";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $courseRow = mysqli_fetch_assoc($result);
        // $courseTitle = $courseRow['courseTitle'];
        // $courseDP = $courseRow['courseDP'];
        // $teacherID = $courseRow['teacherID'];
        $courseTableName = $courseRow['courseTableName'];

        $sql = "SELECT * FROM `$courseTableName` WHERE `chapterID`=$active";
        $result = mysqli_query($con, $sql);
        
        if ($result) {
                
                $chapterRow = mysqli_fetch_assoc($result);
                $chapterID = $chapterRow['chapterID'];
                $chapterTitle = $chapterRow['chapterTitle'];
                $chapterURL = $chapterRow['chapterURL'];

                
                    if ($active == $chapterID) {
                        echo "<div class='tab-pane fade show active' id='v-pills-$active' role='tabpanel' aria-labelledby='v-pills-$active-tab'>";
                            echo "<iframe width='900' height='550' src='$chapterURL' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        echo "</div>";
                    }
    
        }
        
    }

}


echo "</div>";

?>