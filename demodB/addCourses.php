<?php

include "../partials/_connectDB.php";

$sql = "INSERT INTO `courses` (`courseID`, `courseTitle`, `courseDescription`, `coursePrice`, `courseDP`, `courseTableName`, `teacherID`) VALUES (NULL, 'Aao Seekhen Python', 'Guyz , I m starting from Now, Python course that will help you to understand every Conventions, Difficulties , and Doubts to understand the Coding/programming . In through out the Entire Playlist i will guide From Zero To Hero so , just stay with us and follow the playlist and video Till End.', '499', 'img/python.jpg', 'aaoseekhenpython', '1')";
mysqli_query($con, $sql);

$sql = "INSERT INTO `courses` (`courseID`, `courseTitle`, `courseDescription`, `coursePrice`, `courseDP`, `courseTableName`, `teacherID`) VALUES (NULL, 'Java Tutorials For Beginners In Hindi', 'In this complete Core + Advance Java tutorial for beginners in hindi, we will see complete java topics covered in hindi. This java complete tutorial will cover topics like Downloading Java, Installation of Java, java JVM, java inheritance, java inheritance & polymorphism and other complete java tutorial topics will be covered.\r\nThis Java Tutorial for Beginners in Hindi can be used to learn Java in Hindi. Hope you like this Java Tutorial in Hindi. I am very excited to launch this Java full course for you!', '599', 'img/java.jpg', 'codewithharryjava', '2')";
$result = mysqli_query($con, $sql);

$sql = "INSERT INTO `courses` (`courseID`, `courseTitle`, `courseDescription`, `coursePrice`, `courseDP`, `courseTableName`, `teacherID`) VALUES (NULL, 'Namaste JavaScript', 'Namaste JavaScript is a pure in-depth JavaScript Course released for Free on Youtube. It will cover the core concepts of JavaScript in detail and everything about how JS works behind the scenes inside the JavaScript engine.\r\n\r\nHere\'s in full Playlist of this course.\r\nDon\'t miss any video and watch it in sequence.', '999', 'img/js.jpg', 'namastejavascript', '3')";
$result = mysqli_query($con, $sql);

$sql = "INSERT INTO `courses` (`courseID`, `courseTitle`, `courseDescription`, `coursePrice`, `courseDP`, `courseTableName`, `teacherID`) VALUES (NULL, 'C Language Tutorials In Hindi', 'In this latest course on C language tutorials in 2019 in Hindi , we will learn how to write efficient and powerful C programs using modern tools. \r\nC programming is one of the most requested topics on this channel which is why I created this c programming for beginners course. Learning C programming in Hindi is a good decision for people who are comfortable in learning in their mother tongue rather than English. \r\nThese c programming tutorials will clear all your c programming basics and fundamentals. I will constantly give exercises and quizzes throughout this course. \r\nI once again welcome you to this c programming tutorial for beginners video series.', '799', 'img/c.jpg', 'codewithharryc', '2')";
$result = mysqli_query($con, $sql);

$sql = "INSERT INTO `courses` (`courseID`, `courseTitle`, `courseDescription`, `coursePrice`, `courseDP`, `courseTableName`, `teacherID`) VALUES (NULL, 'C++ Tutorials In Hindi', 'This C++ tutorials for beginners will teach you all the c plus plus concepts from the very starting to the end. This Cpp course will introduce you to programming and will continue the discussion on how to write efficient, fast and better CPP programs.', '399', 'img/cpp.jpg', 'codewithharrycpp', '2')";
$result = mysqli_query($con, $sql);

if($result) {
    echo "Courses added to the 'courses' table<br>";
    
    echo "<a href='createTableFeedbacks.php'>Click to create 'feedbacks' Table</a>";
    
} else { 
    echo "Courses could not be added to the 'courses' table";
}

?>