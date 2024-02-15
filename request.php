<?php

if(isset($_GET["comp_num"]) || isset($_GET["med_name"]) {
   $comp_num = $_GET["comp_num"]; // get compartment number value from HTTP GET REQUEST made from arduino trigger
   $med_name = $_GET["med_name"]; // get medicine name value from HTTP GET REQUEST made from arduino trigger

   $servername = "prod-smart-pillbox.mysql.database.azure.com";
   $username = "spbadmin";
   $password = "Password2024";
   $dbname = "spb_prod";

   // Create connection to prod db
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "INSERT INTO spb_table (med_name, comp_num) VALUES ($med_name, $comp_num)";

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $conn->error;
   }

   $conn->close();
} else {
   echo "Error creating new record";
}
?>
