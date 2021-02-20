<?php

echo "<form action='addStudentCourseJunction.php' method='post'>
    <div class='mb-3'>
        <label for='studentID' class='form-label'>Student Email</label>
        <select class='form-select' aria-label='Default select example' name='studentID'>
            <option selected>Select Student Email</option>";

            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($con, $sql);
            if($result){
            
                while ($row = mysqli_fetch_assoc($result)){
                    
                    $studentID = $row["studentID"];
                    $studentEmail = $row["studentEmail"];
            
                    echo "<option value='$studentID'>$studentEmail</option>";
                    
                }
            }

        echo "</select>
    </div>
    <div class='mb-3'>
        <label for='courseID' class='form-label'>Course Title</label>
        <select class='form-select' aria-label='Default select example' name='courseID'>
            <option selected>Open this select menu</option>";

            $sql = "SELECT * FROM `courses`";
            $result = mysqli_query($con, $sql);
            if($result){
            
                while ($row = mysqli_fetch_assoc($result)){
                    
                    $courseID = $row["courseID"];
                    $courseTitle = $row["courseTitle"];
            
                    echo "<option value='$courseID'>$courseTitle</option>";
                    
                }
            }

        echo "</select>
    </div>
    <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Add Student-Course Junction</button>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
    </div>
</form>";

?>