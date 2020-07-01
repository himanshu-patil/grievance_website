<?php

require './connect.php';

$sql="SELECT * FROM `complain_db` ";

mysqli_query($connection,$sql);

echo "No of affected rows : ".mysqli_affected_rows($connection);

if(mysqli_close($connection))
{
    echo "<br>db closed<br>";
}

$con=mysqli_connect('localhost','root','root','college_db');

if(mysqli_connect_errno())
{
    echo "failed jumbo  ".mysqli_connect_error();
}

// echo $con;

?>