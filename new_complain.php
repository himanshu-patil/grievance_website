<?php

require './connect.php';

session_start();


if(empty($_SESSION['username']))
{
     header('location:student_login.html');
}



$subject=$_POST['subject'];
$issue=$_POST['issue'];
$user=$_SESSION['username'];



// echo $subject."<br><br/>".$issue."<br><br/>".$user;

// $sql="SELECT `student id` FROM `student_db` WHERE `student id`='".$username."'LIMIT 1";
// mysqli_query($connection,$sql);

$sql="INSERT INTO `complain_db`(`student id`, `subject`, `issue`) VALUES ($user,'$subject','$issue')";
$result=mysqli_query($connection,$sql);

if(mysqli_affected_rows($connection))
{
    // echo "<br> success";
    echo "
    
    <script>
        alert('Complaint Registered Successfully');
        window.location.href='./sdashboard.php';
    </script>
    
    ";

   
}
else
{
    echo "
    
    <script>
        alert('Failed to register. Please try again.');
        window.location.href='./new_complain.html';
    </script>
    
    "; 
}


?>