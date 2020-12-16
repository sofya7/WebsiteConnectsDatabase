<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List uni</title>
</head>
<body>
<?php
include 'connectdb.php';
include_once("navi.php");
?>
<ol>
<?php
    $iduni= $_POST["univid"];
 $query1= 'SELECT * FROM university WHERE university.uniid = ' . $iduni . '';
        $query2= 'SELECT * FROM university, outsidecourse WHERE university.uniid = ' . $iduni . ' AND  university.uniid=outsidecourse.uniid'; 


$result = mysqli_query($connection,$query1);
   if (!$result) {
        die("databases query failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["uniid"] . " " . $row["uniname"] . " " .  $row["city"] . " " . $row["prov"] . " " .  $row["nickname"] . " " . $row["outsidename"] . " ";
     }
     mysqli_free_result($result);



$result2 = mysqli_query($connection,$query2);
   if (!$result2) {
        die("databases query failed.");
    }
    while ($row=mysqli_fetch_assoc($result2)) {
        echo $row["outsidename"] . " ";
     }
     mysqli_free_result($result2);
?>
</ol>

<?php
   mysqli_close($connection);
?>
</body>
</html>

