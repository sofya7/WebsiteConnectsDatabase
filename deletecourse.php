<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete course or not</title>
</head>
<body>
<?php
include 'connectdb.php';
include_once("navi.php");
?>
<?php
  $coursenum = $_SESSION["globalcoursenum"];
  $del = $_POST["del"]; 
  if ($del == "Delete") {
    $query= 'DELETE FROM westerncourse WHERE westernnum = "' . $coursenum . '"';
    $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "Success! Course was deleted!";
  }
  if ($del == "Do not delete") {
    echo "You chose not to delete the course. You can still find the course in the Western Courses' List.";
  }

?>
</body>
</html>

