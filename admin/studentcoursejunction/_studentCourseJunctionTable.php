<?php

echo "<table class='table' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Junction ID</th>
            <th scope='col'>Student ID</th>
            <th scope='col'>Course ID</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>
    <tbody>";

    $sql = "SELECT * FROM `student-course-junction`";
    $result = mysqli_query($con, $sql);
    if($result){
    
        while ($row = mysqli_fetch_assoc($result)){
            
            $studentCourseJunctionID = $row["junctionID"];
            $studentID = $row["studentID"];
            $courseID = $row["courseID"];

            include "_deleteStudentCoursejunctionModal.php";

            echo "<tr>
            <th scope='row'>$studentCourseJunctionID</th>
            <td>$studentID</td>
            <td>$courseID</td>
            <td>
                <button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteStudentCourseJunctionModal$studentCourseJunctionID'><i class='bi bi-trash h5'></i></button>
            </td>
            </tr>";
        }
    }

echo "
    </tbody>
</table>";

?>