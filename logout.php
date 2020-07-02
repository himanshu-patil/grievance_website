<?php

require './connect.php';

session_start();

session_destroy();

mysqli_close($connection);

header('location:./student_login.html');


?>