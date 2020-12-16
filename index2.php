<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Western's courses and its equivalents</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <?php
    include 'connectdb.php';
    include_once("navi.php");
  ?>
  <h1>Welcome to the Western Courses Database</h1>
  <form action = "noorderdata1.php" method="post">
    <h5> Here you can see all the Western Course Data</h5>
    <input type="submit" value="Get Western Courses' Information">
  </form>
  <h4>Please select how you would like to order the data to see all the Western Course Data here.</h4>
  <form action = "listcoursedata.php" method="post">
    <h5> Would you like to see the list ordered by course number or name?</h5>
    <input type="radio" name="order" value="westernnum" checked>Course number<br>
    <input type="radio" name="order" value="westernname">Course name<br>
    <h5> In ascending or descending order?</h5>
    <input type="radio" name="orderasds" value="ASC" checked>Ascending<br>
    <input type="radio" name="orderasds" value="DESC">Descending<br>	
    <input type="submit" value="Get Western Courses' Information">
  </form>
  <h5>Here you can change the Western course's name or weight or suffix: INSERT LINK TO THE CORRECT .PHP FILE</h5>

//Allows the user to enter a new Western Course.
//The user should is able to enter all the information.
//If the user enters a course number that already exists, the user receives a warning message and is not allowed to be enter the course into the system.
//User follows the rules of the course number starting with cs. 
 <h2> Add a new western course:</h2>
<form action="adduwocourse.php" method="post">
New Course's Number: cs<input type="text" name="number" maxlength="4" pattern="\d{1,4}" required/><br>
New Course's Name: <input type="text" name="name" required><br>
New Course's Weight: <input type="number" required name="weight" min="0" step=".1"><br>
New Course's Suffix: <input type="text" name="suffix" maxlength="3"><br>

<input type="submit" value="Add New Course">
</form>

  <?php 
   mysqli_close($connection);
  ?>
</body>
</html>
