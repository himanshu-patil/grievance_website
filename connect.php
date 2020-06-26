<?php

define('DB_HOST','localhost');
define('DB_NAME','college_db');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");

$var1= "connected";
?>