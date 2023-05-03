<?php

   include "connection.php";
   $time = time();

  $data =  $_REQUEST["data"];
  $reading = explode("@", $data);
  
  $hr = $reading[0];
  $sp= $reading[1];
  $h = $reading[2];
  $t = $reading[3];

  $time=date("d-m-Y h:i:s");
  $p_id = '1';
   
   $sql="INSERT INTO `sensordata`( `data1`, `data2`, `data3`, `data4`, `time`, `p_id`) VALUES ('$hr', '$sp','$h','$t','$time','$p_id')";


   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error());
   }
   
   echo "%data uploaded#";

   mysqli_close($conn);
?>               