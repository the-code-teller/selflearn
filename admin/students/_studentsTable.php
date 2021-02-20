<?php

echo "<table class='table' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Student ID</th>
            <th scope='col'>Student Email</th>
            <th scope='col'>Student First Name</th>
            <th scope='col'>Student Last Name</th>
            <th scope='col'>Student Occupation</th>
            <th scope='col'>Student Password</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>";

$sql = "SELECT * FROM `users`";
$result = mysqli_query($con, $sql);
if($result){

    while ($row = mysqli_fetch_assoc($result)){
        
        $studentID = $row["studentID"];
        $studentEmail = $row["studentEmail"];
        $studentFirstName = $row["studentFirstName"];
        $studentLastName = $row["studentLastName"];
        $studentOccupation = $row["studentOccupation"];
        $studentAdminPassword = $row["studentAdminPassword"];

        include "_updateStudentModal.php";
        include "_deleteStudentModal.php";
        
        echo "<tr>
            <th scope='row'>$studentID</th>
            <td>$studentEmail</td>
            <td>$studentFirstName</td>
            <td>$studentLastName</td>
            <td>$studentOccupation</td>
            <td>$studentAdminPassword</td>
            <td class='d-flex'>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updateStudentModal$studentID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deleteStudentModal$studentID'><i class='bi bi-person-x-fill h5'></i></button>
            </td>
        </tr>";
    }
}

echo "
    </tbody>
</table>";

?>