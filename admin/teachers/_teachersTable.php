<?php

echo "<table class='table' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Teacher ID</th>
            <th scope='col'>Teacher Name</th>
            <th scope='col'>Teacher Designation</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>";

$sql = "SELECT * FROM `teachers`";
$result = mysqli_query($con, $sql);
if($result){

    while ($row = mysqli_fetch_assoc($result)){
        
        $teacherID = $row["teacherID"];
        $teacherName = $row["teacherName"];
        $teacherDesignation = $row["teacherDesignation"];

        include "_updateTeacherModal.php";
        include "_deleteTeacherModal.php";
        
        echo "<tr>
            <th scope='row'>$teacherID</th>
            <td>$teacherName</td>
            <td>$teacherDesignation</td>
            <td class='d-flex py-0'>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updateTeacherModal$teacherID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deleteTeacherModal$teacherID'><i class='bi bi-person-x-fill h5'></i></button>
            </td>
        </tr>";
    }
}

echo "
    </tbody>
</table>";

?>