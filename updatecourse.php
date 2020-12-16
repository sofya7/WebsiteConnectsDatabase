<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Update courses</title>
</head>
<body>
  <?php
    include_once("navi.php");
  ?>
  <h4>Please select one of the Western Courses listed and change the Western course name or weight or suffix. I want to change:</h4>
  <form action = "performupdate1.php" method="post"> 
  <input type="radio" name="changes" value="westernname">Name<br>
  <input type="radio" name="changes" value="weight">Weight<br>
 <input type="radio" name="changes" value="suffix">Suffix<br><br>
  <input type="text" id="changefield" name="coursechange"><br><br>
    <input type="submit" name="submituporde"  value="Apply changes to the course">

 <h4>Please select one of the Western Courses listed and delete it if you prefer to do so.</h4>
    <input type="submit" name="submituporde" value="Delete the course">
  </form>


</body>
</html>

