<?php
   $query = "select westernnum from equivalentto where westernnum="cs3319"";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
 if(!empty($result)) {
echo "U cannot delete coz equiv. do u still wanna delete?"; 
   }
   mysqli_free_result($result);
?>

