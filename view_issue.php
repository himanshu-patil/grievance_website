<?php
require './connect.php';

if (!$connection) {
     die('Could not connect: ');
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
  <!-- <link rel="stylesheet" href="./view_issue.css"> -->

  <title>View issue</title>
  <style type="text/css">
         .animated {
          -webkit-transition: all 1s ease;
          -o-transition: all 1s ease;
          transition: all 1s ease;
        }
        .jumbotron{
          padding: 2rem 3rem;
          margin: 13px;
          border-radius: 2.3rem;
        }
        .jumbotron h2{
          position: relative;
          display: block;
          padding-top: 40px;
        }
        .jumbotron .bg-overlay {
          height: 300px;
          background: rgba(0,0,0,0.3);
          border-radius: 25px;
        }
        .jumbotron:hover .bg-overlay {
          height: 300px;
          color: white;
          background: rgba(25,15,50,0.9);
        }


        .btn{
        position:relative;
          top:50px;
          left:500px;
        color:black;
        background: #ccc;  
        }
        .btn:hover{
        background-color: green;
        }



          </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
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


  <div class="container my-3">
    <div class="jumbotron">
      <div class="bg-overlay animated">
        
          <h2>subject is here...
             <?php
             $student_id=$_POST['student id'];
              $sql = "SELECT `subject` FROM 'complain_db' WHERE `student id`='".$student_id."' LIMIT 1";   
              $result = mysqli_query($connection, $sql);
              $row = mysqli_fetch_assoc($result);
              
              echo $row['subject'];
              
              
             ?>
          </h2>

          <p>Insert description text here.</p>
          
        
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