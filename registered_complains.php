<?php
require './connect.php';
//include './student_login.php';
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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


     <title>Registered Complaints</title>
     <style>
          #mytable {
               opacity: 0.97;
               background: transparent;
          }
          body{
               background-image: url('../img/registered_compalins_bg.jpg');
               background-size: cover;
          }
          .bg {
               width: 100%;
               position: absolute;
               z-index: -1;
               opacity: 0.6;
          }
     </style>
</head>

<body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Home</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
          </div>
     </nav>

     <!-- <img class="bg" src="./grievance_websilte/img/registered_complains_bg.jpg" alt="img here."> -->
     <div class="container my-4">

          <h1 style="text-align: center;">--Registered Complaints--</h1>
          <table class="table table-striped table-bordered table-hover  my-4" id="myTable">
               <thead class="thead-dark">
                    <tr>
                         <th scope="col">Sr No</th>
                         <th scope="col">Student id</th>
                         <th scope="col">Subject</th>
                         <th scope="col">Date</th>
                         <th scope="col">Status</th>
                         <th scope="col">Action</th>
                    </tr>
               </thead>
               <tbody>

                    <?php
                    $sql = "SELECT * FROM `complain_db` where `student id`='" . $_SESSION['username'] . "'";
                    $result = mysqli_query($connection, $sql);


                    while ($row = mysqli_fetch_array($result)) {
                         echo '  
       <tr>  
            <td>' . $row["sr no"] . '</td>  
            <td>' . $row["student id"] . '</td>  
            <td>' . $row["subject"] . '</td>  
            <td>' . $row["date"] . '</td>  
            <td>' . $row["status"] . '</td>';
            
            echo "
            <!-- <td><button class=' btn btn-sm btn-dark'>View</button></td> -->
           <td> <a href=./view_issue.php?srno=".$row['sr no']." class='btn btn-secondary btn-sm active' role='button' aria-pressed='true'>View</a></td>
       </tr>  
       ";
                    }
                    ?>
               </tbody>
          </table>
     </div>
     <hr>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
     <script>
          $(document).ready(function() {
               $('#myTable').DataTable();
          });
     </script>

</body>

</html>