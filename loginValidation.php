<?php

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

  include "partials/_connectDB.php";
  
  $studentEmail = $_POST['studentEmail'];
  $studentPassword = $_POST['studentPassword'];
  
  $sql = "SELECT * FROM `users` WHERE `studentEmail`='$studentEmail'";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    while($row = mysqli_fetch_assoc($result)){
      if(password_verify($studentPassword, $row['studentPassword'])){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['studentID'] = $row['studentID'];
        $_SESSION['studentEmail'] = $studentEmail;
        $_SESSION['studentFirstName'] = $row['studentFirstName'];
        $_SESSION['studentLastName'] = $row['studentLastName'];
        $_SESSION['studentOccupation'] = $row['studentOccupation'];
        $_SESSION['studentDP'] = $row['studentDP'];

        header("location: /selflearn/");
      }
      else{
        header("location: /selflearn?login=wrongPass");
      }
    }
  }else{
    header("location: /selflearn?login=notExists");
  }
}

?>