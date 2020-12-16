<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Added new course</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<?php
   $number= $_POST["number"];
$number= "cs" . "$number";
   $name = $_POST["name"];
   $weight = $_POST["weight"];
   $suffix =$_POST["suffix"];

     $query2 = 'select * from westerncourse where westernnum="' . $number . '"';
     $result2 = mysqli_query($connection,$query2);
     if (!$result2) {
        die("databases query failed.");
     }
     while ($row2 = mysqli_fetch_assoc($result2)) {
     $test=$row2["westernnum"];
     }
     mysqli_free_result($result2);
     if (!($test=="")){
     echo "Warning! This course number already exists. This course is not allowed to be entered into the system.";
     echo "<br>";
     }
     else { 

   $query1= 'select max(westernnum) as maxid from westerncourse';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $westernum = (string)$newkey;
   $query = 'INSERT INTO westerncourse values("' . $number. '","' . $name . '","' . $weight . '","' . $suffix . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your course was added!";
   }
   mysqli_close($connection);
?>
</body>
</html>
