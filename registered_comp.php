<?php
require './connect.php';

session_start();  
                 /*CHECK  */

                  
if(empty($_SESSION['username']))
{
     header('location:student_login.html');
}
if (isset( $_POST['save'])){         /**CHECK */
  
   
    $subject = $_POST["subjectEdit"];
    $issue = $_POST["issueEdit"];
    $srno=$_POST["sr"];
    

 
  $sql = "UPDATE `complain_db` SET `subject` = '$subject', `issue` ='$issue'  WHERE `sr no` = $srno";     
  $result = mysqli_query($connection, $sql);
  if(mysqli_affected_rows($connection))
        {
            echo "<script>
            alert('Data updated successfully');
            window.location.href='./registered_complains.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Failed to update data');
            window.location.href='./registered_complains.php';
            </script>";
        }
}
// if(isset($_POST['delete'])){
//     $srno = $_POST['sr no'];
    

//                          // $sql = "DELETE FROM `complain_db` WHERE `sr no` = $srno";
//     $sql = "DELETE FROM `complain_db` WHERE `complain_db`.`sr no` = $srno";
//     $result = mysqli_query($connection, $sql);
//     $delete = true;
//     if(mysqli_affected_rows($connection)){  
//         echo "<script>alert('Data deleted successfully');
//         window.location.href='./registered_complains.php';
//         </script>";
        
//     }
//     else
//     {
//         echo "<script>
//         alert('Failed to delete data');
//         window.location.href='./registered_complains.php';
//         </script>";
//     }

    
// }

?>