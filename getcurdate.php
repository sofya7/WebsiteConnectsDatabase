<?php
   $query = "SELECT CURDATE()";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        $currentdate=$row["CURDATE()"] . "<br>";
   }
   mysqli_free_result($result);
?>

