<?php

    require "./connect.php";

    session_start();

    if(empty($_SESSION['teacherUsername']))
    {
        header('location:teacher_login.html');
    }

    if(isset($_POST['deletebtn']))
    {
        $srno=$_POST['srno'];

        $sql="DELETE FROM `notice` WHERE `sr no`=$srno";

        mysqli_query($connection,$sql);

        if(mysqli_affected_rows($connection))
        {
            header('location:./cdashboard.php');
        }
        else
        {
            echo "<script>
                alert('Failed to delete');
                window.location.href='./cdashboard.php';
                </script>";
        }
    }
    
?>