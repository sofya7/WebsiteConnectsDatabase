
<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <title>Ordered Western Course Information</title>
</head>
<body>
  <?php
    include 'connectdb.php';
    include_once("navi.php");
  ?>
  <h1>Please familiarize yourself with Western Course Information:</h1>
  <?php
    $nameornum= $_POST["order"];
    $asords= $_POST["orderasds"];
    $query = 'SELECT * FROM westerncourse ORDER BY ' . $nameornum . ' ' . $asords . '';
    $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    echo "<ol>";
    while ($row=mysqli_fetch_assoc($result)) {
      echo "<li>" . "Course number " . $row["westernnum"] . ", Course name " . $row["westernname"] . ", Weight " . $row["weight"] . ", Suffix  " . $row["suffix"] . "</li>";
    }
    mysqli_free_result($result);
    echo "</ol>";
  ?>
  <?php
    mysqli_close($connection);
  ?>
</body>
</html>
