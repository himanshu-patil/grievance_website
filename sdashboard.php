<?php

require './connect.php';

session_start();

?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grievance System - Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./css/sdashboard.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
  <script src="bootstrap-4.0.0/js/bootstrap.min.js""></script>

    </head>
    <body>

         <!-- Modal -->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle"><span id="notice-title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <span id="notice-content"></span>
              </div>
              <div class="modal-footer">
                <label>Circular date : <span id="noticeDate"></span></label>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Modal over -->

        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class=" navbar-brand" href="./sdashboard.php">Asgard College</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="sdashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="student_profile.php">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="new_complain.html">New_Complain</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registered_complains.php">Registered_Complain</a>
                </li>

                
                
              </ul>
              <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
            </div>
          </nav>
        <div class="container ">
            <div class="row">
                <aside class="side-box col-8 col-md-4 offset-1 offset-md-0">
                    <div class="content">
                        <a href="./student_profile.php"> Profile </a> <br>
                        <a href="./new_complain.html"> New Complain </a> <br>
                        <a href="./registered_complains.php"> Registered&nbspComplain </a> <br>
                        <a href="./logout.php"> Logout </a> <br>
                    </div>
                    
                    
                </aside>
                <!-- <aside class="col">

                </aside> -->

                <div class="mango col-10 offset-1 col-md-5 offset-md-3 mt-3 ">
                  
                  <h3 class="mb-3 mt-2 "><strong class="col-12 col-md-4 px-0">Announcements</strong></h3>
                  
                  <?php

                    $sql="SELECT `sr no`,`subject` FROM `notice`";

                    $result=mysqli_query($connection,$sql);
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $srno=$row['sr no'];
                      $_SESSION['ann_no']=$srno; // " ' '

                    ?>
                      <div class="row">
                        <a href='#' data-toggle='modal' data-target="#myModal" class="mb-3  col-9 text-truncate"
                        id="<?php echo $srno; ?>" onclick="ShowDetails(this)"> <?php echo $row['subject']; ?>
                        </a>
                      </div>
                       
                       
                       
                      
                      <?php
                    }

                    if(mysqli_num_rows($result)==0)
                    {
                      echo "<i>No announcements</i><br><hr><br>";
                    }



                  ?>
                </div>
            </div>
            
        </div>
        
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>


  <script>
    function ShowDetails(button){
      var srno=button.id;

      $.ajax({
        url:"announcement.php",
        type:"GET",
        data:{"srno":srno},
        success:function(response){
          var circular=JSON.parse(response);
          $('#notice-title').text(circular.subject);
          $('#notice-content').text(circular.content);
          $('#noticeDate').text(circular.date);
        }
      });
    }
  </script>
  </body>

  </html>