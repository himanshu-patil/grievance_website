<?php
require './connect.php ';

$error=''; 

if(isset($_POST['submit'])){

    if(empty($_POST['student id']) || empty($_POST['password'])){
    $error = "Username or Password is Invalid";
    }
    else
    {
        
        $user=$_POST['student id'];
        $pass=$_POST['pass'];
        
         $conn = mysqli_connect("localhost", "root", "");////////////////////doubt
        
        $db = mysqli_select_db($conn, "test");
        
        $query = mysqli_query($conn, "SELECT * FROM user,pass WHERE password='$password' AND user='$student id'");
        $rows = mysqli_num_rows($query);
        if($rows == 1){
            header("Location: ./sdashboard.html "); 
        }
        else
        {
            $error = "Username of Password is Invalid";
        }
        mysqli_close($conn); 
    }
}
?>