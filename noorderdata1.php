<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Course Information</title>
</head>
<body>
<?php
include 'connectdb.php';
include_once("navi.php");
?>



<h1>Please familiarize yourself with Western Course Information:</h1>
<form action="performupdate1.php" method="post">
<?php
   include 'getallcourses.php';
include 'updatecourse.php';
?>
</form>

<?php
mysqli_close($connection);
?>
</body>
</html>

