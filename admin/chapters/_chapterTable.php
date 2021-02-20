<?php

echo "<table class='table' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Chapter ID</th>
            <th scope='col'>Chapter Title</th>
            <th scope='col'>Chapter URL</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>
    <tbody>";
    
    $sql = "SELECT * FROM `$courseTableName`";
    $result = mysqli_query($con, $sql);
    if($result){
        
        while ($row = mysqli_fetch_assoc($result)){
            
            $chapterID = $row["chapterID"];
            $chapterTitle = $row["chapterTitle"];
            $chapterURL = $row["chapterURL"];

            include "_updateChapterModal.php";
            include "_deleteChapterModal.php";
            
            echo "<tr>
            <th scope='row'>$chapterID</th>
            <td>$chapterTitle</td>
            <td>$chapterURL</td>
            <td class='d-flex'>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updateChapterModal$chapterID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deleteChapterModal$chapterID'><i class='bi bi-trash h5'></i></button>
            </td>
            </tr>";
        }
    }


echo "
    </tbody>
</table>";

?>