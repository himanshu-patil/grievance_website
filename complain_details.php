<?php 
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Complain Details</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/student_details.css">
        <link rel="stylesheet" type="text/css" href="./css/complain_details.css">
        
        <script src="bootstrap-4.0.0/js/bootstrap.min.js""></script>

        <script ></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
            <a class="navbar-brand" href="./cdashboard.html">Navbar</a>
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
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

          <div id='main'>
              <?php

                require './connect.php';
                
                $id=$_GET['id'];
                $sql="SELECT  `first name`, `last name`, `department` FROM `student_db` WHERE `student id`='".$id."' LIMIT 1";

                $result=mysqli_query($connection,$sql);
                $row=mysqli_fetch_assoc($result);

                // if($row=mysqli_fetch_assoc($result))
                // {
                //     $_SESSION['fullname']=$row['first name']+$row['last name'];
                //     $_SESSION['dept']=$row['department'];
                //     echo $_SESSION['fullname'];
                // }
                ?>
              <div class='jumbotron pt-3 pb-3'>
                    <div class='row'>
                        <h2>Complain Details : </h2>
                    </div> 
                    <div class='row'>
                        <h5>Student ID : <?php echo $id; ?> </h5>
                    </div>
                    <div class='row'>
                        <h5>Full Name :
                             <?php 
                             $fullname= $row['first name']." ".$row['last name'];
                             echo $fullname;
                              ?> </h5>
                    </div>
                    <div class='row'>
                        <h5>Department : <?php echo $row['department']; ?> </h5>
                    </div>
              </div>

              <?php

                    $srno=$_GET['no'];
                    $_SESSION['SRN']=$srno;
                    $sql="SELECT  `date`, `subject`, `issue`, `status` FROM `complain_db` WHERE `sr no`='".$srno."' LIMIT 1";

                    $result=mysqli_query($connection,$sql);
                    $row=mysqli_fetch_assoc($result);

               ?>
                
              <div class="container p-4">
                <div class="row ml-2 mb-2">
                    <b>Date and Time : <?php echo $row['date'] ; ?></b> 
                </div> 
                <div class="row ml-2 mb-3">
                    <b>Subject : <?php echo $row['subject'] ; ?> </b>
                </div>
                <div class="row ml-2 mb-1">
                    <b>Issue : </b>
                </div>
                <div class="row ml-2 mb-3">
                    <?php echo $row['issue'] ; ?>
                </div>

                <div class="row ml-2 mb-3">
                    <b>Current Status : <?php echo $row['status'];  ?></b>
                </div>

                <div class="row ml-2 mb-1">
                    <b>Change Status : </b>
                </div>
                <form method="POST" action="./update_status.php">
                    <div class="row ml-2">
                        <div class=" col-12 col-md-2">
                            <input type="radio" value="UNSOLVED" name="complainStatus">
                             <!-- checked> -->
                            <label>UNSOLVED</label>
                        </div>

                        <div class=" col-12 col-md-2">
                            <input type="radio" value="SOLVED" name="complainStatus">
                            <label>SOLVED</label>
                        </div>

                        <div class=" col-12 col-md-2">
                            <input type="radio" value="IN PROGRESS" name="complainStatus">
                            <label>IN PROGRESS</label>
                        </div>
                    </div>
                    
                    <div class="row offset-md-10">
                        <!-- <a href='./update_status.php'> -->
                         <button class='btn btn-outline-warning' type="submit" onclick="">Update</button>
                         <!-- </a> -->
                        <!-- <a href='./all_complains.php'> <button class='btn btn-outline-warning ml-4'>Back</button> </a>  -->
                    </div>
                </form>

                
                
                
            </div>


      

        <script src="" async defer></script>
    </body>
</html>