<?php

require './connect.php ';

  $username = $_POST['name'];
  $password = $_POST['password'];

  $sql =  "SELECT `student id`,`password` FROM student_db WHERE `student id`='".$username."'and `password`='".$password."'limit 1";                                    
                
  $result = mysqli_query($connection,$sql);    

  
  if(empty($username) || empty($password))
  {
      header('location : student_login.html');
  }
  elseif (mysqli_num_rows($result)==1)
  {
      header('location:sdashboard.html');
  }
  else
  {
      echo "invalid credentials";
      exit();
  }
  
?>