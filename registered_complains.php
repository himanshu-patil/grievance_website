<?php
require './connect.php';

session_start();

                 /*CHECK  */

                  
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
     
     <link rel="stylesheet" type="text/css" href="./css/registered_complains.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->


     <title>Registered Complaints</title>
     
</head>

<body>
     <!-- Edit Modal -->
       
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Your Complaint</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="registered_comp.php" method="POST" >
          <div class="modal-body" > 
                                                                 
            <input type="hidden" name='sr' id ='sr'>
            
            


            <div class="form-group">
              <label>Subject :</label>
              <input type="text" class="form-control" id="subjectEdit" name="subjectEdit" >
             
            </div>

            <div class="form-group">
              <label>Issue :</label>
              <textarea class="form-control" id="issueEdit" name="issueEdit" rows="3">
             
    
               </textarea>
            </div>  
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name='save'>Save changes</button>
          </div>
     

        </form>    
      </div>
    </div>
  </div>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="sdashboard.html">Asgard College</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                         <a class="nav-link" href="sdashboard.html">Home</a>
                    </li>
                    <li class="nav-item ">
                         <a class="nav-link" href="student_profile.php">Profile</a>
                    </li>
                    <li class="nav-item ">
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
     
     <!--  -->

     
<!-- //   if($update){
//     echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//     <strong>Success!</strong> Your complaint has been updated successfully
//     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//       <span aria-hidden='true'>×</span>
//     </button>
//   </div>";
//   } -->
  

     
     <div class="container my-4">
     

          <h1 style="text-align: center;">--Registered Complaints--</h1>
          <div class="table-responsive-md">
               
               <table class="table  table-hover  my-4" id="myTable">
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
               <td class='text-center'> <a href=./view_issue.php?srno=" . $row['sr no'] . " class='btn btn-secondary btn-sm active' role='button' aria-pressed='true'>View</a>
               <button class=' view_data btn btn-info btn-sm btn-secondary' data-toggle='modal' data-target='#dataModal' onclick=' ShowDetails(this)'  role='button' id=".$row['sr no'].">Edit</button>
          </tr> 

          
          ";
                     }
                         ?>
                    </tbody>            
                                        
               </table>

          </div>
          
     </div>
     <hr>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
     <script>
          $(document).ready(function() {
               $('#myTable').DataTable();
          });



          
          function ShowDetails(button){
      var srno=button.id;
          console.log(srno);
       $.ajax({
         url:"subissue.php",
         type:"GET",
         data:{"srno":srno},
         success:function(response){
              
            var circular=JSON.parse(response);
         
            $('#sr').val(srno);
            $('#subjectEdit').val(circular.subject);
            $('#issueEdit').val(circular.issue);
           // $('#noticeDate').text(circular.date);
         }
       });
    }  

      
//    var edits = document.getElementsByClassName('view_data');
//      Array.from(edits).forEach((element) => {
//        element.addEventListener("click", (e) => {
//          console.log("view_data");
//          tr = e.target.parentNode.parentNode;
//          subject = tr.getElementsByTagName("td")[2].innerText;
                
     
//       //    issue = tr.getElementsByTagName("td")[1].innerText;
        

//          console.log(subject);
//          subjectEdit.value = subject;
//       //    issueEdit.value = issue;
//          srno = e.target.id               
//                                          //    snoEdit.value = e.target.id;
//          console.log(e.target.id)
//          $('#dataModal ').modal('toggle');
//        })
//      })
     </script>

</body>

</html>