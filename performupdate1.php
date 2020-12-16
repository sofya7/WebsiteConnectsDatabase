<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Updating course</title>
</head>
<body>
<?php
include 'connectdb.php';
include_once("navi.php");
?>
<?php
  $column= $_POST["changes"];
  $column= $_POST["changes"];
  $column= $_POST["changes"];
  $courseid= $_POST["uwocourse"];
$_SESSION["globalcoursenum"] = $courseid;
  $textbox= $_POST["coursechange"];
  $submitor= $_POST["submituporde"];
  if ($submitor == "Delete the course") {
     $query2 = 'select * from equivalentto where westernnum="' . $courseid . '"';
     $result2 = mysqli_query($connection,$query2);
     if (!$result2) {
        die("databases query failed.");
     }
     while ($row2 = mysqli_fetch_assoc($result2)) {
     $test=$row2["westernnum"];
     }
     mysqli_free_result($result2);
     echo '<form action="deletecourse.php" method="post">';   
     if (!($test=="")){
     echo "This course is equivalent to one or more outside courses. Still want to delete it?";
     echo "<br>";
     echo '<input type="submit" value="Delete" name="del">' . "     ";
     echo '<input type="submit" value="Do not delete" name="del">';
     }
     else {
     echo "This will be a permanent deletion. This your last chance to back out. Still want to delete the selected course?";
     echo "<br>";
     echo '<input type="submit" value="Delete" name="del">' . "     ";
     echo '<input type="submit" value="Do not delete" name="del">';      
     }
     echo '</form>';
  }
  if ($submitor== "Apply changes to the course") {
    $query= 'UPDATE westerncourse SET ' . $column . '= "' . $textbox . '" WHERE westernnum="' . $courseid . '"';
    $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "Success!";
  }
?>
<?php
   mysqli_close($connection);
?>
</body>
</html>
