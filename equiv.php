<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Equivalent Courses</title>
</head>
<body>
  <?php
    include 'connectdb.php';
    include_once("navi.php");
  ?>
  <h1>Welcome to the Equivalent courses Database</h1>
<p>
<hr>
<p> 
 <h4>Please select a Western course by number to see all outside courses(as well as their properties) it is equivalent to.</h4>
<form action="listequivs.php" method="post">
<?php
   include 'getcoursenum.php';
?>
<input type="submit" value="get university info">
</form>

<h4>Please select a date to show all equivalencies made before and including that date.</h4>
<form action="listequivdate.php" method="post">
  <input type="date" name="date">
 <input type="submit" value="push button">
</form>


 <h2> Add a new equivalence:</h2>

<form action="addequiv.php" method="post">
New Equivalence will be for this existing Western course: cs<input type="text" name="uwo" maxlength="4" pattern="\d{1,4}" required/><br>
New Equivalence will be for this existing outside course: <input type="text" name="outside" required><br>
This existing outside course is from which university?:<br>

<?php
   
include 'getuninameforequiv.php';
include 'getcurdate.php';
?>
<input type="submit" value="Add New Equivalence">
</form>



  <?php
   mysqli_close($connection);
  ?>
</body>
</html>

