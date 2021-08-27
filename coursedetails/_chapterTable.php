<?php

echo "<table class='table border' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>Module No.</th>
            <th scope='col'>Module Title</th>";
            
            if ($loggedin) {   

                $sql = "SELECT * FROM `student-course-junction` WHERE `studentID`=$studentID AND `courseID`=$courseID";
                $result = mysqli_query($con, $sql);

                if ($result) { 

                    $nor = mysqli_num_rows($result);
                    if ($nor > 0) {   
                        echo "<th scope='col'>Play</th>";
                    }
                }
            }

        echo "</tr>
    </thead>
    <tbody>";

$sql = "SELECT * FROM `$courseTableName`";
$result = mysqli_query($con, $sql);
if($result){

    while ($row = mysqli_fetch_assoc($result)){
        
        $chapterID = $row["chapterID"];
        $chapterTitle = $row["chapterTitle"];
        // $chapterURL = $row["chapterURL"];
        
        echo "<tr>
            <th scope='row'>$chapterID</th>
            <td>$chapterTitle</td>";

            if ($loggedin) {   
                $sql = "SELECT * FROM `student-course-junction` WHERE `studentID`=$studentID AND `courseID`=$courseID";
                $res = mysqli_query($con, $sql);

                if ($res) { 
                    $nor = mysqli_num_rows($res);
                    if ($nor != 0) {   
                        echo "<td class='p-0'><a href='/selflearn/chapter/?courseID=$courseID&active=$chapterID' type='button' class='btn'><i class='bi bi-play-fill h3 text-danger'></i></button></td>";
                    }
                }
            }

        echo "</tr>";
    }
}

echo "
    </tbody>
</table>";

?>