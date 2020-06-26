<?php

require './connect.php ';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username = $POST['name'];
  $password = $POST['password';]

  $sql =  "SELECT `student id`,`password` FROM student_db WHERE `student id`='".$username."'and `password`='".$password."'limit 1"                                    
          
             


  $result = mysqli_query($connection, $sql);    

  if(!$result || mysql_num_rows($result) <= 0)
    {
        echo "Error logging in.";
        echo "The name or password does not match";
        
    }
    if (mysqli_num_rows($result)==1 )
    {
      echo "logged in..";
       header("Location: sdashboard.html");    

    }

  

      $username = trim($_POST['username']);
      $password = trim($_POST['password']);

?>