<?php
require './connect.php';
session_start();

if(empty($_SESSION['username']))
{
     header('location:teacher_login.html');
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile - Teacher</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="./css/profile.css" > -->

  <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/profile.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="bootstrap-4.0.0/js/bootstrap.min.js""></script>


    </head>
    <body>

    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class=" navbar-brand" href="./cdashboard.html">Asgard College </a> <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent"
    aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation" >
    
      <span class = "navbar-toggler-icon" ></span> </button>

      <div class = "collapse navbar-collapse"
    id = "navbarSupportedContent" >
      
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
               <a class="nav-link" href="cdashboard.html">Home</a>
          </li>
          <li class="nav-item ">
               <a class="nav-link active" href="teacher_profile.php">Profile<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
               <a class="nav-link" href="student_details.php">Student_Details</a>
          </li>
          <li class="nav-item ">
               <a class="nav-link" href="all_complains.php">All_Complaints</a>
          </li>


     </ul> <form class = "form-inline my-2 my-lg-0" >
      
      <input class = "form-control mr-sm-2"
    type = "search"
    placeholder = "Search"
    aria - label = "Search" >
      
    <button class = "btn btn-outline-success my-2 my-sm-0"
    type = "submit" > Search </button> 
     </form> 
    </div> 
  </nav> 
  <div id = "main"
    class = "float-md-right p-4" >
      <div class = "card col-12 alpha" >
      <div class = "card-header" >
      <b> Profile </b> 
    </div> 
    <ul class = "list-group list-group-flush" >
      <?php
      $user = $_SESSION['teacherUsername'];
      $sql = "SELECT * FROM `teacher_db` WHERE `username` ='" . $user . "' ";
      $result = mysqli_query($connection, $sql);

      if ($row = mysqli_fetch_assoc($result)) {
        echo "<li class='list-group-item li-items'> Gr No : " . $row['gr no'] . "</li>";
        echo "<li class='list-group-item li-items'> Username : " . $row['username'] . "</li>";
        echo "<li class='list-group-item li-items'> First Name : " . $row['first name'] . "</li>";
        echo "<li class='list-group-item li-items'> Last Name : " . $row['last name'] . "</li>";
        echo "<li class='list-group-item li-items'> Department : " . $row['department'] . "</li>";
        echo "<li class='list-group-item li-items'> Date of birth : " . $row['dob'] . "</li>";
        echo "<li class='list-group-item li-items'> Password : " . $row['password'] . "</li>";
      } else {
        echo "<li class='list-group-item li-items'> No records [ERROR] ";
      }

      ?> 
    </ul> 
    </div>

      <a href = "./cdashboard.html" > <button type = "button" id = "back-btn" class = "btn btn-warning mt-3 float-md-right" > Back </button></a>


      </div>


      <script src = ""
    async defer>
    </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  </body>

</html>