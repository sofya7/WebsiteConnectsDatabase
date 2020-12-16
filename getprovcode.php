<?php
   $query = "SELECT DISTINCT prov FROM university";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="uniprov" value=';
        echo $row["prov"];
        echo '>' . $row["prov"] . "<br>";
   }
   mysqli_free_result($result);
?>
