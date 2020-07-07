<?php
require './connect.php';
session_start();

// echo "<script>console.log('d1');</script>";

if(isset($_SESSION['teacherUsername']) || isset($_SESSION['username']) )
{
    $srno=$_GET['srno'];
    // echo "<script>console.log('d2');</script>";

    $sql="SELECT * FROM `notice` WHERE `sr no`=$srno";

    $result=mysqli_query($connection,$sql);

    $obj=mysqli_fetch_object($result);

    echo json_encode($obj);
}
else
{
    header('location:teacher_login.html');
}



?>