<?php
   $query = "SELECT westernnum FROM westerncourse";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="coursenum1" value="';
        echo $row["westernnum"];
        echo '">' . $row["westernnum"] . "<br>";
   }
   mysqli_free_result($result);
?>
