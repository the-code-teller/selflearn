<?php

$sql = "SELECT * FROM `courses`";
$result = mysqli_query($con, $sql);
    
    if ($result) {
        
        for ($i=0; $i < 10 && $row = mysqli_fetch_assoc($result); $i++) {

            
            $courseID = $row['courseID'];
            $courseTitle = $row['courseTitle'];
            // $courseDescription = $row['courseDescription'];
            $coursePrice = $row['coursePrice'];
            $courseDP = $row['courseDP'];
            // $courseTableName = $row['courseTableName'];
            $teacherID = $row['teacherID'];
            
            $sql = "SELECT * FROM `student-course-junction` WHERE `studentID`=$studentID AND `courseID`=$courseID";
            $reC = mysqli_query($con, $sql);

            if ($reC) {
                
                $nor = mysqli_num_rows($reC);
                if ($nor == 0) {
                    
                    $sql = "SELECT * FROM `teachers` WHERE `teacherID`='$teacherID'";
                    $res = mysqli_query($con, $sql);
                    
                    if ($res) {
                        
                        $roT = mysqli_fetch_assoc($res);
                        // $teacherID = $roT['teacherID'];
                        $teacherName = $roT['teacherName'];
                        $teacherDesignation = $roT['teacherDesignation'];
                        
                        include "_courseCard.php";
                    }
                    
                }
            }
        }
    }

?>