<?php
require './connect.php';
session_start();

if(empty($_SESSION['teacherUsername']) || isset($_SESSION['username']) )
{
header('location:teacher_login.html');
}

$srno=$_GET['srno'];

$sql="SELECT * FROM `notice` WHERE `sr no`=$srno";

$result=mysqli_query($connection,$sql);

$obj=mysqli_fetch_object($result);

echo json_encode($obj);

?>