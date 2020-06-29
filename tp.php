<?php
     require './connect.php';

     if (!$connection) {
          die('Could not connect: ');
     }
     
     $sql = "SELECT subject FROM `complain_db` WHERE `student id`=$student_id LIMIT 1;   //doubt
    
     $result = mysqli_query($connection, $sql);
    
     $row = mysqli_fetch_assoc($result);

          echo $row['subject'];     

     
     
     
     
     
     
     

?>