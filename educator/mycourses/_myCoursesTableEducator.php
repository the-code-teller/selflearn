<?php

echo "<div class='m-3 table-responsive'>

    <table class='table' id='myTable'>
        <thead>
            <th scope='col'>S.No.</th>
            <th scope='col'>Course Title</th>
            <th scope='col'>Course Description</th>
            <th scope='col'>Course Price</th>
            <th scope='col'>Course DP</th>
            <th scope='col'>Enrolled</th>
            <th scope='col'>Action</th>
        </thead>
        <tbody>";

        $sql = "SELECT * FROM `courses` WHERE `teacherID`=2";
        $result = mysqli_query($con, $sql);

        if ($result) {
            
            $sno = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                
                $courseID = $row["courseID"];
                $courseTitle = $row["courseTitle"];
                $courseDescription = $row["courseDescription"];
                $coursePrice = $row["coursePrice"];
                $courseDP = $row["courseDP"];
                $courseTableName = $row["courseTableName"];
                // $teacherID = $row["teacherID"];

                include "_courseDescriptionModal.php";
                include "_courseDPModal.php";
                // include "_updateCourseModal.php";
                // include "_deleteCourseModal.php";

                echo "<tr>
                    <th scope='row'>$sno</th>
                    <td>$courseTitle</td>
                    <td>
                        <a type='button' class='text-decoration-none' data-bs-toggle='modal' data-bs-target='#courseDescriptionModal$courseID'>See Description</button>
                    </td>
                    <td>$coursePrice</td>
                    <td>
                        <a type='button' class='text-decoration-none' data-bs-toggle='modal' data-bs-target='#courseDPModal$courseID'>See Image</button>
                    </td>
                    <td>";

                    $sql = "SELECT * FROM `student-course-junction` WHERE `courseID`=$courseID";
                    $res = mysqli_query($con, $sql);
                    
                    if ($res) {
                        $enrolled = mysqli_num_rows($res);
                    } else {
                        $enrolled = 0;
                    }
                    
                    echo $enrolled;
                    
                    echo "</td>
                    <td class='d-flex'>
                        <a href='/selflearn/educator/modules/?cid=$courseID' type='button' class='btn text-success'><i class='bi bi-chevron-double-right h5'></i></a>
                        <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updateCourseModal$courseID'><i class='bi bi-pencil-square h5'></i></button>
                        <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deleteCourseModal$courseID'><i class='bi bi-trash h5'></i></button>
                    </td>
                </tr>";

                $sno++;
            }
        }
        
        echo "</tbody>
    </table>

</div>";

?>