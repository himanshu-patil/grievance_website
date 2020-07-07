<?php

    require "./connect.php";

    session_start();

    if(empty($_SESSION['teacherUsername']))
    {
        header('location:teacher_login.html');
    }

    if(isset($_POST['editBtn']))
    {
        $srno=$_POST['editModalSrno'];
        $subject = $_POST['subject'];
        echo $subject." ".$srno;
        $content = $_POST['content'];
        $date=date("Y/m/d");

        $sql="UPDATE `notice` SET `date`='$date',`subject`='$subject',`content`='$content' WHERE `sr no`=$srno";

        $result=mysqli_query($connection,$sql);

        if(mysqli_affected_rows($connection))
        {
            echo "<script>
            alert('Data updated successfully');
            window.location.href='./cdashboard.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Failed to update data');
            window.location.href='./cdashboard.php';
            </script>";
        }
    }
?>