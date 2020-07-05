<?php
require './connect.php';

$srno=$_GET['srno'];

$sql="SELECT * FROM `notice` WHERE `sr no`=$srno";

$result=mysqli_query($connection,$sql);

$obj=mysqli_fetch_object($result);

echo json_encode($obj);

?>