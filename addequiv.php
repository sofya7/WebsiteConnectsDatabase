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
   $query5= "SELECT CURDATE()";
   $result5 = mysqli_query($connection,$query5);
   if (!$result5) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result5)) {
        $currentdate=$row["CURDATE()"] . "<br>";
   }
   mysqli_free_result($result5);
?>

<?php
   $uwo= $_POST["uwo"];
   $uwo= "cs" . "$uwo";
  
$outside= $_POST["outside"];
  $uniid= $_POST["uniid2"];
    $query2 = 'select * from equivalentto where westernnum="' . $number . '" AND outsidenum = "' . $number . '" AND uniid= "' . $uniid . '"';
     $result2 = mysqli_query($connection,$query2);
     if (!$result2) {
        die("databases query failed.");
     }
     while ($row2 = mysqli_fetch_assoc($result2)) {
     $test=$row2["westernnum"];
     }
     mysqli_free_result($result2);
     if (!($test=="")){
       echo "This equivalence already exists, so we modified its date to be the today's date.";
     }

   $query1= 'select max(westernnum) as maxid from equivalentto';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
  $westernum = (string)$newkey;
   $query = 'INSERT INTO equivalentto values("' . $uwo . '","' . $outside . '","' . $uniid . '","' . $currentdate . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your equivalence was added!";
   mysqli_close($connection);
?>
</body>
</html>


