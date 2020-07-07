<?php

require './connect.php ';

session_start();

  $username = $_POST['name'];
  $password = $_POST['password'];

  $_SESSION['username']=$username;

  $sql =  "SELECT `student id`,`password` FROM student_db WHERE `student id`='".$username."'and `password`='".$password."'limit 1";                                    
                
  $result = mysqli_query($connection,$sql);    

  
  if(empty($username) || empty($password))
  {
      header('location : student_login.html');
  }
  elseif (mysqli_num_rows($result)==1)
  {
      header('location:sdashboard.php');
  }
  else
  {
    echo "
    <script>
        alert('Invalid credentials');
        window.location.href='./teacher_login.html' ;
    </script>
    ";
    
  }
  
?>