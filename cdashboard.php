<?php

require './connect.php';

session_start();

if(empty($_SESSION['teacherUsername']))
{
  header('location:teacher_login.html');
}
$_SESSION['ann_no']=1;

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
 
  <!-- <script src="bootstrap-4.0.0/js/bootstrap.min.js""></script> -->

  

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

        <!-- Modal add announcement -->
        <div class="modal fade" id="addNoticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form id="addNoticeForm" method="POST" action="addNotice.php">
                  <div class="form-group">
                    <label for="subject" class="col-form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Content</label>
                    <textarea class="form-control" name="content" id="notice-content"></textarea>
                  </div>
                  <div class="form-group  float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="saveNoticeModal" name="save" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

        <!-- modal over -->

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="DeleteModalTitle">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="deleteNotice.php" method="POST">
                  <input type="hidden" name="srno" id='deleteModalinput'>
                  <div class="form-group  float-right">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    <button type="submit" id="deleteModalYesBtn" name="deletebtn" class="btn btn-danger">Yes</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <!-- Modal over -->

        <!-- Modal edit announcement -->
        <div class="modal fade" id="editNoticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form id="editNoticeForm" method="POST" action="editNotice.php">
                  <input type="hidden" name="editModalSrno" id="editModalSrno">
                  <div class="form-group">
                    <label for="editSubject" class="col-form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" id="editSubject">
                  </div>
                  <div class="form-group">
                    <label for="editContent" class="col-form-label">Content</label>
                    <textarea class="form-control" name="content" id="editContent"></textarea>
                  </div>
                  <div class="form-group  float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="editNoticeModal" name="editBtn" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

        <!-- modal over -->

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

                <div class="mango col-10 offset-1 col-md-5 offset-md-3 mt-3 ">
                  
                  <h3 class="mb-3 mt-2 "><strong class="col-12 col-md-4 px-0">Announcements</strong>
                  <button type="button" data-toggle="modal" data-target="#addNoticeModal" id="add-notice-btn"
                   class="btn btn-info btn-sm float-right col-12 col-md-2 my-3 my-md-0">Add</button></h3>
                  
                  <?php

                    $sql="SELECT `sr no`,`subject` FROM `notice`";

                    $result=mysqli_query($connection,$sql);
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                      $srno=$row['sr no'];
                      $_SESSION['ann_no']=$srno; // " ' '

                    ?>
                      
                      <div class="row">
                        <a href='#' data-toggle='modal' data-target="#myModal" class=" col-4 col-md-7 text-truncate"
                        id="<?php echo $srno; ?>" onclick="ShowDetails(this)"> <?php echo $row['subject']; ?>
                        </a>
                        
                        <button type="button" data-toggle='modal' data-target="#editNoticeModal" id="<?php echo $srno; ?>"
                          onclick="editNotice(this)" class="btn btn-sm btn-success ml-auto mr-3">Edit</button>
                          <button type="button" data-toggle='modal' data-target="#deleteModal" id="<?php echo $srno; ?>"
                          onclick="deleteNotice(this)" class="btn btn-sm btn-danger mr-3">Delete</button>

                        </div>
                       <br>
                      
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

        
        
  <script src="jquery-3.5.1.min.js">
    </script>
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

        function deleteNotice(button){
          var srno=button.id;
          console.log(srno);
          $('#deleteModalinput').val(srno);
          
        }

        function editNotice(button){
          var srno=button.id;
          console.log(srno);
          $('#editModalSrno').val(srno);

          $.ajax({
            url:"announcement.php",
            type:"GET",
            data:{"srno":srno},
            success:function(response){
              var circular=JSON.parse(response);
              $('#editSubject').val(circular.subject);
              $('#editContent').val(circular.content);
            }
          });


          
        }

        
     
    </script>
  
</body>

</html>