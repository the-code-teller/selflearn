<?php

echo "<table class='table' id='myTable'>
    <thead>
        <tr>
            <th scope='col'>Feedback ID</th>
            <th scope='col'>Student Email</th>
            <th scope='col'>Feedback</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>";
         
$sql = "SELECT * FROM `feedbacks`";
$result = mysqli_query($con, $sql);
if($result){

    while ($row = mysqli_fetch_assoc($result)){
        $feedbackID = $row["feedbackID"];
        $studentID = $row["studentID"];
        $feedback = $row["feedback"];
        
        
        echo "<tr>
        <th scope='row'>$feedbackID</th>
        <td>$studentID</td>
        <td>$feedback</td>
        <td>
            <button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteFeedbackModal'><i class='bi bi-trash h5'></i></button>
        </td>
        </tr>";
    }
}

echo "</tbody>
</table>";

include "_deleteFeedbackModal.php";

?>