<?php
require './connect.php';
session_start();


if(empty($_SESSION['username']))
{
     header('location:student_login.html');
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./view_issue.css">

  <title>View issue</title>
  
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./sdashboard.php">Asgard College</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="sdashboard.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="student_profile.php">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="new_complain.html">New_Complain</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="registered_complains.php">Registered_Complain<span class="sr-only">(current)</span></a>
                </li>

                
                
              </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>


  <div class="container my-3">
    <div class="jumbotron">
      <div class="bg-overlay animated">

        <h2>
          <?php
          $student_id = $_SESSION['username'];/**ye kya bavasir banake rakha hai samjha */
          $srno=$_GET['srno'];
         $sql = "SELECT * FROM `complain_db` WHERE `sr no`='$srno' LIMIT 1 ";
          
          // $sql = " SELECT * FROM `complain_db` WHERE `student id`='3' LIMIT 1 ";
          

          $result = mysqli_query($connection, $sql);

          $row = mysqli_fetch_assoc($result);

          //  echo $student_id."<br>";


          if ($row) {
            echo "Subject :- ";
            echo $row['subject'];
          } else {
            echo "<br>no records";
          }

          ?>
        </h2>

        <p>
        <h5>
          <?php
            if ($row) {
              echo "Issue :- ";
              echo $row['issue'];
            } else {
              echo "<br>no records";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            ?>
        </h5>
        </p>

        <div class="aligncenter">
          
            <?php
            if ($row) {
              echo "Student id :- ";
              echo $row['student id'];     
            } else {
              echo "<br>no records";
            }
            echo "<br>";
            ?>
            
            <?php
            if ($row) {
              echo "Complaint Status :- ";
              echo $row['status'];     
            } else {
              echo "<br>no records";
            }
            echo "<br>";
            ?>

            <?php
            if ($row) {
              echo "Date and Time :- ";
              echo $row['date'];     
            } else {
              echo "<br>no records";
            }
            echo "<br>";
            ?>
        </div>

      </div>




    </div>
  </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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