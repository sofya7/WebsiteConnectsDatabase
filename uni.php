<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Canadian Universities</title>
</head>
<body>
  <?php
    include 'connectdb.php';
    include_once("navi.php");
  ?>
  <h1>Welcome to the Canadian Universities Database</h1>
  <h4>Please select a university from the list (ordered by province) to see all the university information and university's courses.</h4>
<form action="uniupdate.php" method="post">
<?php
   include 'getuni.php';
?>
<input type="submit" name="su"  value="get university info">
</form>

<h4>Please select a province code and see all the university names and nicknames from that province</h4>
<form action="listuniforprov.php" method="post">
<?php
   include 'getprovcode.php';
?>
<input type="submit" name="subm"  value="get universities for the province">
</form>
<h4>Please click below to list the names and nicknames of universities that are in our system but do not have any courses associated with them.</h4>
<form action="listuninocourses.php" method="post">
<input type="submit" name="nocourses"  value="get universities without courses">
</form>



  <?php
   mysqli_close($connection);
  ?>
</body>
</html>


