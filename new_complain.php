<?php

require './connect.php';

$subject=$_POST['subject'];
$issue=$_POST['issue'];



echo $subject."<br><br/>".$issue;

$sql="INSERT INTO `complain_db`(`sr no`, `student id`, `date`, `subject`, `issue`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])"


?>