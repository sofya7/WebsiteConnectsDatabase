<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List equivalent courses to a UWO course</title>
</head>
<body>
<?php
include 'connectdb.php';
include_once("navi.php");
?>
<ol>
<?php
    $code= $_POST["coursenum1"];
// see  name,number,weight of western course
// see university name, outside course name,outside course number, weight of all outside courses, date this equivalency was made. 
 $query1= 'SELECT westernname, westernnum, weight FROM westerncourse WHERE westernnum ="' . $code . '"';
$query2= 'SELECT university.uniname, outsidecourse.outsidename, outsidecourse.outsidenum, outsidecourse.weight, equivalentto.evaluateddate FROM outsidecourse, university, equivalentto WHERE outsidecourse.outsidenum IN (SELECT equivalentto.outsidenum FROM equivalentto WHERE equivalentto.westernnum = "' . $code . '") AND outsidecourse.uniid=university.uniid AND equivalentto.uniid=university.uniid';
$result = mysqli_query($connection,$query1);
   if (!$result) {
        die("databases query failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row["westernname"] . " " . $row["westernnum"] . " " . $row["weight"] . "<br> ";
     }
     mysqli_free_result($result);

$result2 = mysqli_query($connection,$query2);
   if (!$result2) {
        die("databases query failed.");
    }
    while ($row=mysqli_fetch_assoc($result2)) {
        echo '<li>';
        echo $row["uniname"] . " " . $row["outsidename"] . " " . $row["outsidenum"] . " " . $row["weight"] . " " . $row["evaluateddate"] . "<br> ";
     }
     mysqli_free_result($result2);




?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

