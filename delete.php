<?php


  include "connection.php";
  
  if(isset($_REQUEST['id']))
  {

     
  }else
  {
    echo"<script>window.location.href='index.php';</script>";
  }

  $id = $_REQUEST['id'];

            
        $sql="DELETE FROM `p_data` WHERE id = '$id'; ";
            
        if(mysqli_query($link, $sql))
          {

                  echo"<script> alert('Data deleted') </script>";
                  echo '<script>window.location.href = "dashboard.php";</script>';

           
          } else{
              echo "ERROR: Could not able to execute $sql. ";
          }
          

  
  
   mysqli_close($link);
?>