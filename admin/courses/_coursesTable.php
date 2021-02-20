<?php

echo "<table class='table' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Course ID</th>
            <th scope='col'>Course Title</th>
            <th scope='col'>Course Description</th>
            <th scope='col'>Course Price</th>
            <th scope='col'>Course DP</th>
            <th scope='col'>Course Table Name</th>
            <th scope='col'>Course Teacher ID</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>
    <tbody>";

    $sql = "SELECT * FROM `courses`";
    $result = mysqli_query($con, $sql);
    if($result){
    
        while ($row = mysqli_fetch_assoc($result)){
            
            $courseID = $row["courseID"];
            $courseTitle = $row["courseTitle"];
            $courseDescription = $row["courseDescription"];
            $coursePrice = $row["coursePrice"];
            $courseDP = $row["courseDP"];
            $courseTableName = $row["courseTableName"];
            $teacherID = $row["teacherID"];

            include "_courseDescriptionModal.php";
            include "_courseDPModal.php";
            include "_updateCourseModal.php";
            include "_deleteCourseModal.php";

            echo "<tr>
            <th scope='row'>$courseID</th>
            <td>$courseTitle</td>
            <td>
                <a type='button' class='text-decoration-none' data-bs-toggle='modal' data-bs-target='#courseDescriptionModal$courseID'>See Description</button>
            </td>
            <td>$coursePrice</td>
            <td>
                <a type='button' class='text-decoration-none' data-bs-toggle='modal' data-bs-target='#courseDPModal$courseID'>See Image</button>
            </td>
            <td>$courseTableName</td>
            <td>$teacherID</td>
            <td class='d-flex'>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updateCourseModal$courseID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deleteCourseModal$courseID'><i class='bi bi-trash h5'></i></button>
            </td>
            </tr>";
        }
    }

echo "
    </tbody>
</table>";

include "_addCourseModal.php";

?>