<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile - Teacher</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" href="./css/profile.css" > -->

        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/profile.css">

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
  <div id="main" class="float-md-right p-4">
  <div class="card col-12" >
            <div class="card-header">
              Profile
            </div>
            <ul class="list-group list-group-flush">
                <?php 
                  require './connect.php';

                  $sql="SELECT * FROM `teacher_db`";
                  $result=mysqli_query($connection,$sql);

                  if($row=mysqli_fetch_assoc($result))
                  {
                    echo "<li class='list-group-item'> Gr No : ".$row['gr no']."</li>";
                    echo "<li class='list-group-item'> Username : ".$row['username']."</li>";
                    echo "<li class='list-group-item'> First Name : ".$row['first name']."</li>";
                    echo "<li class='list-group-item'> Last Name : ".$row['last name']."</li>";
                    echo "<li class='list-group-item'> Department : ".$row['department']."</li>";
                    echo "<li class='list-group-item'> Date of birth : ".$row['dob']."</li>";
                    echo "<li class='list-group-item'> Password : ".$row['password']."</li>";

                  }

                ?>
              </ul>
          </div>

          <a href="./cdashboard.html"><button type="button" class="btn btn-outline-warning mt-3 float-md-right" >Back</button></a>
        

  </div>
        
        <script src="" async defer></script>
    </body>
</html>