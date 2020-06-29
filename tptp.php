<?php
     require './connect.php';

     if (!$connection) {
          die('Could not connect: ');
     }
    $sql = "SELECT * FROM `complain_db`;
    $result = mysqli_query($connection, $sql);
    mysqli



?>      