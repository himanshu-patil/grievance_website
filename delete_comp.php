<?php
require './connect.php';

session_start();

if(empty($_SESSION['username']))
    {
        header('location:student_login.html');
    }

if(isset($_POST['deletebtn']))
    {
        $srno=$_POST['srno'];

        $sql="DELETE FROM `complain_db` WHERE `sr no`= $srno";

        mysqli_query($connection,$sql);

        if(mysqli_affected_rows($connection))
        {
            header('location:registered_complains.php');
        }
        else
        {
            echo "<script>
                alert('Failed to delete');
                window.location.href='registered_complains.php';
                </script>";
        }
    }
