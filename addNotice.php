<?php

    require "./connect.php";

    session_start();

    if(empty($_SESSION['teacherUsername']))
    {
        header('location:teacher_login.html');
    }

    if(isset($_POST['save']))
    {
        

        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $date=date("Y/m/d");

        $sql="INSERT INTO `notice`(`subject`, `content`,`date`) VALUES('$subject','$content','$date')";

        $result=mysqli_query($connection,$sql);

        if(mysqli_affected_rows($connection))
        {
            echo "<script>
            alert('Data inserted successfully');
            window.location.href='./cdashboard.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Failed to insert data');
            window.location.href='./cdashboard.php';
            </script>";
        }
    }
?>