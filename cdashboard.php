<?php

require './connect.php';

session_start();

?>


<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grievance System -Committee Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./css/sdashboard.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
 
  <script src="bootstrap-4.0.0/js/bootstrap.min.js""></script>

    </head>
    <body>
        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class=" navbar-brand" href="./cdashboard.html">Asgard College</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                     <a class="nav-link active" href="cdashboard.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="teacher_profile.php">Profile</a>
                </li>
                <li class="nav-item ">
                      <a class="nav-link" href="student_details.php">Student_Details</a>
                </li>
                <li class="nav-item ">
                      <a class="nav-link" href="all_complains.php">All_Complaints</a>
                </li>


           </ul>
              
            </div>
          </nav>
        <div class="container ">
            <div class="row">
                <aside class="side-box col-8 col-md-4 offset-1 offset-md-0">
                    <div class="content">
                        <a href="./teacher_profile.php"> Profile </a> <br>
                        <a href="./student_details.php"> Student&nbspDetails </a> <br>
                        <a href="./all_complains.php"> All&nbspComplaints </a> <br>
                        <a href="./teacher_login.html"> Logout </a> <br>
                    </div>
                </aside>

                <div class="mango col-8 col-md-5 offset-md-3 mt-3">
                  
                  <strong>Announcements</strong><br><br>
                  <?php

                    $sql="SELECT `subject` FROM `notice`";

                    $result=mysqli_query($connection,$sql);
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                      echo 
                      $row['subject']."<br><hr><br>
                      
                      ";
                    }

                    if(mysqli_num_rows($result)==0)
                    {
                      echo "<i>No announcements</i><br><hr><br>";
                    }



                  ?>
                </div>
            </div>
            
        </div>

        
        <script src="" async defer></script>
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