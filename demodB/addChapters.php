<?php

include "../partials/_connectDB.php";

$sql = "INSERT INTO `aaoseekhenpython` (`chapterID`, `chapterTitle`, `chapterURL`) VALUES (NULL, 'Python For All || Tutorial 1 || Hindi || Zero To Hero', 'https://www.youtube.com/embed/H-sHtQDhffg')";
mysqli_query($con, $sql);

$sql = "INSERT INTO `aaoseekhenpython` (`chapterID`, `chapterTitle`, `chapterURL`) VALUES (NULL, 'Python For All|| Tutorial 2 || Data Types and variables|| Hindi', 'https://www.youtube.com/embed/o7Sw0PURY4o')";
mysqli_query($con, $sql);

$sql = "INSERT INTO `aaoseekhenpython` (`chapterID`, `chapterTitle`, `chapterURL`) VALUES (NULL, 'Tutorial 3 (part-2) Data Types, variables, concatenation of strings, Taking Input|| in Hindi', 'https://www.youtube.com/embed/iOjUXdWTW0k')";
mysqli_query($con, $sql);

$sql = "INSERT INTO `aaoseekhenpython` (`chapterID`, `chapterTitle`, `chapterURL`) VALUES (NULL, 'Python for All || Tutorial 4 || String Slicing and manipulations', 'https://www.youtube.com/embed/XcGspas6IT4?start=120\r\n')";
mysqli_query($con, $sql);

$sql = "INSERT INTO `aaoseekhenpython` (`chapterID`, `chapterTitle`, `chapterURL`) VALUES (NULL, 'Python For All || Precap || Hindi', 'https://www.youtube.com/embed/fK5I9WNadWg?start=120')";
mysqli_query($con, $sql);

include "addChapterC.php";
include "addChapterCpp.php";
include "addChapterJava.php";
include "addChapterJS.php";

echo "Chapters successfully added<br>";

echo "<a href='addCourses.php'>Click to add Courses to the 'courses' tables</a>";

?>