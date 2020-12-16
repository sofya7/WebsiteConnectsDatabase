
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
    $provuni= $_POST["uniprov"];

 $query1= 'SELECT uniname, nickname FROM university WHERE prov ="' . $provuni . '"';

$result = mysqli_query($connection,$query1);
   if (!$result) {
        die("databases query failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["uniname"] . " " . $row["nickname"] . "<br> ";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
