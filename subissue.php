<?php
require './connect.php';
session_start();


if (empty($_SESSION['username'])) {
  header('location:student_login.html');
}

$srno = $_GET['srno'];

$sql = "select * from `complain_db` where `sr no` = $srno ";
$result = mysqli_query($connection,$sql);
$obj=mysqli_fetch_object($result);

    echo json_encode($obj);

?>
