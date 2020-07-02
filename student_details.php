<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Details - Student</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/student_details.css"
        <script src="bootstrap-4.0.0/js/bootstrap.min.js""></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
            <a class="navbar-brand" href="./cdashboard.html">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                     <a class="nav-link " href="cdashboard.html">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="teacher_profile.php">Profile</a>
                </li>
                <li class="nav-item ">
                      <a class="nav-link active " href="student_details.php">Student_Details<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                      <a class="nav-link" href="all_complains.php">All_Complaints</a>
                </li>


           </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

          <div id='main'>

              <!-- Search form -->
              <form name="searchform" method="POST" action="./student_details_search.php">
                <div class="row">
                    
                    <div class="col-10 offset-1 offset-md-4 col-md-3 md-form mt-4">
                        <input class="form-control" type="text" name="search-box" placeholder="Search by student id" aria-label="Search" required>
                    </div>
                    <div class="col-12 offset-1 offset-md-0 col-md">
                        <input class="btn btn-outline-success mt-4" type="submit" value="Search">
                    </div>
                  
                </div>
              </form>

              <div class="row mt-5">
                  <div class="col-10 offset-1">
                    <div class="table-responsive-md">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Gr No</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Dept.</th>
                                <th scope="col">Date of birth</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require "./connect.php";
                
                                    $sql="SELECT * FROM `student_db`";
                
                                    $result=mysqli_query($connection,$sql);
                
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        echo "<tr><th scope='row'>".$row['gr no']."</th><td>".$row['student id']."</td><td>"
                                        .$row['first name']."</td><td>".$row['last name']."</td><td>"
                                        .$row['department']."</td><td>".$row['dob']."</td></tr>";
                                    }
                                    if(mysqli_num_rows($result)==0)
                                    {
                                      echo "<tr><th scope='row'>0 results</th></tr>";
                                    }
            
                                ?>
                              
                            </tbody>
                          </table>
                      </div>
        
                  </div>
              </div>
          </div>

      

        <script src="" async defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>