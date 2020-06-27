<?php

require './connect.php';
include './student_login.php';

$subject=$_POST['subject'];
$issue=$_POST['issue'];



echo $subject."<br><br/>".$issue;//."<br><br/>".$username;

// $sql="SELECT `student id` FROM `student_db` WHERE `student id`='".$username."'LIMIT 1";
// mysqli_query($connection,$sql);

// $sql="INSERT INTO `complain_db`(`student id`, `subject`, `issue`) VALUES ($username,$subject,$issue)";
// $result=mysqli_query($connection,$sql);

// if(mysqli_num_rows($result))
// {
//     echo "<br> success";
// }
// else
// {
//     echo "failed to insert";
// }


?>