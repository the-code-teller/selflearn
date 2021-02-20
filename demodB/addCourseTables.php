<?php

include "../partials/_connectDB.php";

$courseTableName = "aaoseekhenpython";
include "../admin/create/_createCourseTable.php";

$courseTableName = "codewithharryjava";
include "../admin/create/_createCourseTable.php";;

$courseTableName = "namastejavascript";
include "../admin/create/_createCourseTable.php";

$courseTableName = "codewithharryc";
include "../admin/create/_createCourseTable.php";

$courseTableName = "codewithharrycpp";
include "../admin/create/_createCourseTable.php";

echo "Course Tables created<br>";

echo "<a href='addChapters.php'>Click to add Demo Chapters to the courses</a>";

?>