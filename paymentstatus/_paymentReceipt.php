<?php

echo "<table class='table border' id='myTable'>";

    echo"<tbody>";

    echo "<tr>
        <th scope='row'>Order ID</th>
        <td>$orderID</td>
    </tr>
    <tr>    
        <th scope='row'>Email</th>
        <td>$studentEmail</td>
    </tr>
    <tr>
        <th scope='row'>Course</th>
        <td>$courseTitle</td>
    </tr>
    <tr>
        <th scope='row'>Transaction Amount</th>
        <td>$amount</td>
    </tr>
    <tr>
        <th scope='row'>Order Date</th>
        <td>$orderDate</td>
    </tr>
    <tr>
        <th scope='row'>Payment Status</th>
        <td>$paymentStatus</td>
    </tr>";

echo "
    </tbody>
</table>";

?>