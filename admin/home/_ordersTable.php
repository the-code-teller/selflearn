<?php

echo "<table class='table border' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Order ID</th>
            <th scope='col'>Student ID</th>
            <th scope='col'>Course ID</th>
            <th scope='col'>Order Date</th>
            <th scope='col'>Transaction Amount</th>
            <th scope='col'>Payment Status</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>";

$sql = "SELECT * FROM `orders` ORDER BY orderID DESC";
$result = mysqli_query($con, $sql);
if($result){

    while ($row = mysqli_fetch_assoc($result)){
        
        $orderID = $row["orderID"];
        $studentID = $row["studentID"];
        $courseID = $row["courseID"];
        $orderDate = $row["orderDate"];
        $amount = $row["amount"];
        $paymentStatus = $row["paymentStatus"];

        include "_updateOrderModal.php";
        include "_deleteOrderModal.php";
        
        echo "<tr>
            <th scope='row'>$orderID</th>
            <td>$studentID</td>
            <td>$courseID</td>
            <td>$orderDate</td>
            <td>$amount</td>
            <td>$paymentStatus</td>
            <td class='d-flex'>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updateOrderModal$orderID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deleteOrderModal$orderID'><i class='bi bi-trash h5'></i></button>
            </td>
        </tr>";
    }
}

echo "
    </tbody>
</table>";

?>