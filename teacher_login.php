<?php

require './connect.php' ;

session_start();
$username=$_POST['name'];
$password=$_POST['password'];

$_SESSION['teacherUsername']=$username;

// echo $username."  ".$password;

$sql="SELECT `username`,`password` FROM teacher_db WHERE `username`='".$username."'and `password`='".$password."'limit 1";

$result=mysqli_query($connection,$sql);



if(empty($username) || empty($password))
{
    header('location : teacher_login.html');
}
elseif (mysqli_num_rows($result)==1)
{
    
    header('location:cdashboard.php');
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