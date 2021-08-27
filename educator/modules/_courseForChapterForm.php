<?php

echo "<form action='/selflearn/admin/chapters' method='get'>
    <input type='hidden' name='active' value='chapters'>
    <div class='form-group d-flex m-3'>
        <select class='form-control' id='courseID' name='courseID'>
        <option selected>Select Course</option>";

$sql = "SELECT * FROM `courses`";
$result = mysqli_query($con, $sql);
if($result){

    while ($row = mysqli_fetch_assoc($result)){
        
        $courseID = $row["courseID"];
        $courseTitle = $row["courseTitle"];

        echo "<option value='$courseID'>$courseTitle</option>";
        
    }
}

echo        "</select>
        <div class='m-2'>
            <button type='submit' class='btn btn-primary btn-lg'>Submit</button>
        </div>
    </div>
</form>";

?>