<?php 

echo "<hr class='text-dark'>";

// echo "<div class='container-fluid row text-center bg-warning py-2 mt-2'>
//     <div class='col'><a type='button' href='#' class='text-primary text-decoration-none'><i class='bi bi-facebook'> facebook</i></a></div>
//     <div class='col'><a type='button' href='#' class='text-danger text-decoration-none'><i class='bi bi-instagram'> instagram</i></a></div>
//     <div class='col'><a type='button' href='#' class='text-primary text-decoration-none'><i class='bi bi-linkedin'> linkedin</i></a></div>
//     <div class='col'><a type='button' href='#' class='text-dark text-decoration-none'><i class='bi bi-github'> github</i></a></div>
//     <div class='col'><a type='button' href='#' class='text-primary text-decoration-none'><i class='bi bi-twitter'> twitter</i></a></div>
// </div>";

echo "<div class='container-fluid text-center py-2'>
    <div class='row'>
        <div class='col-md-2 border border-left-0 border-top-0 border-bottom-0 border-dark'>
            <a href='/selflearn/' type='button' class='text-decoration-none'>Home</a><br>
            <a href='/selflearn/courses' type='button' class='text-decoration-none'>All Courses</a><br>
            <a href='/selflearn/aboutus' type='button' class='text-decoration-none'>About Us</a><br>";
            if ($loggedin) {
                
                echo "<a href='/selflearn/profile' type='button' class='text-decoration-none'>My Profile</a><br>";
                echo "<a href='/selflearn/mycourses' type='button' class='text-decoration-none'>My Courses</a>";
            }
            
        echo "</div>
        <hr class='d-md-none'>
    <div class='col-md-7'>
        <br class='d-none d-md-block'>
        <p>Confused on which course to take? We have got you covered. Browse courses and find out the best course for
            you. Its free! selfLearn is our attempt to teach basics and those coding techniques to people in short time which
                took us ages to learn.</p>
    </div>
    <hr class='d-md-none'>
        <div class='col-md-3 border border-right-0 border-top-0 border-bottom-0 border-dark'>";
                
$sql = "SELECT * FROM `courses`";
$result = mysqli_query($con, $sql);
if ($result) {
    
    for ($i=1; $i <= 5 && $row = mysqli_fetch_assoc($result) ; $i++) { 
        $courseID = $row['courseID'];
        $courseTitle = $row['courseTitle'];
        echo "<a href='/selflearn/courseDetails?courseID=$courseID' type='button' class='text-decoration-none'>$courseTitle</a><br>";
    }
}

        echo "
        </div>
    </div>
</div>
                
<div class='container-fluid text-center bg-dark text-white p-2'>
    Copyright &#169; 2021 || Team selfLearn ||
    <a href='#' type='button' class='text-decoration-none'>Back to top</a>
</div>
                
";

?>
                