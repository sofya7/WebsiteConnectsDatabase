<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List equivalent courses to a UWO course based on date</title>
</head>
<body>
<?php
include 'connectdb.php';
include_once("navi.php");
?>


<?php
$date= $_POST["date"];
// see  name,number,weight of western course
// see university name, outside course name,outside course number, weight of all outside courses, date this equivalency was made.
 $query1= 'SELECT westerncourse.westernname, westerncourse.westernnum, westerncourse.weight, university.uniname, outsidecourse.outsidename, outsidecourse.outsidenum, outsidecourse.weight AS outweight, equivalentto.evaluateddate FROM outsidecourse, university, equivalentto, westerncourse WHERE equivalentto.evaluateddate<= "' . $date . '" AND outsidecourse.uniid=university.uniid AND equivalentto.uniid=university.uniid AND westerncourse.westernnum=equivalentto.westernnum AND outsidecourse.outsidenum=equivalentto.outsidenum;';
$result = mysqli_query($connection,$query1);
   if (!$result) {
        die("databases query failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row["westernname"] . " " . $row["westernnum"] . " " . $row["weight"] . $row["uniname"] . " " . $row["outsidename"] . " " . $row["outsidenum"] . " " . $row["outweight"] . " " . $row["evaluateddate"] . "<br> ";
     }
     mysqli_free_result($result);


?>

<?php
   mysqli_close($connection);
?>
</body>
</html>

