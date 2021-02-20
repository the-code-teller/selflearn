<?php

echo "<form action='addCourse.php' method='post' enctype='multipart/form-data'>
    <div class='mb-3'>
        <label for='courseTitle' class='form-label'>Course Title</label>
        <input type='text' class='form-control' id='courseTitle' name='courseTitle'>
    </div>
    <div class='mb-3'>
        <label for='courseDescription' class='form-label'>Course Description</label>
        <textarea class='form-control' id='courseDescription' rows='3' name='courseDescription'></textarea>
    </div>
    <div class='mb-3'>
        <label for='coursePrice' class='form-label'>Course Price</label>
        <input type='number' class='form-control' id='coursePrice' name='coursePrice'>
    </div>
    <div class='mb-3'>
        <label for='courseDP' class='form-label'>Course Thumbnail</label>
        <input class='form-control' type='file' id='courseDP' name='courseDP'>
    </div>
    <div class='mb-3'>
        <label for='courseTableName' class='form-label'>Course Table Name</label>
        <input type='text' class='form-control' id='courseTableName' name='courseTableName'>
    </div>
    <div class='mb-3'>
        <label for='teacherID' class='form-label'>Teacher ID</label>
        <select class='form-select' aria-label='Default select example' name='teacherID'>
            <option selected>Open this select menu</option>";

            $sql = "SELECT * FROM `teachers`";
            $result = mysqli_query($con, $sql);
            if($result){
            
                while ($row = mysqli_fetch_assoc($result)){
                    
                    $teacherID = $row["teacherID"];
                    $teacherName = $row["teacherName"];
            
                    echo "<option value='$teacherID'>$teacherName</option>";
                    
                }
            }

        echo "</select>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Add Course</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>