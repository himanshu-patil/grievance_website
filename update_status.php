<?php

require './connect.php';

session_start();

$sr = $_SESSION['SRN'];
$status=$_POST['complainStatus'];

$sql="UPDATE `complain_db` SET `status`='".$status."' WHERE `sr no` ='".$sr."' ";

$result=mysqli_query($connection,$sql);
    
// echo $status;
if(mysqli_affected_rows($connection))
{

    echo "
    <script>
        alert('Complain status updated');
        window.location.href='./all_complains.php';
    </script>
    ";
}
else
{
    echo "
    <script>
        alert('Failed to update status');
        window.location.href='./complain_details.php';
    </script>
    ";
}


?>