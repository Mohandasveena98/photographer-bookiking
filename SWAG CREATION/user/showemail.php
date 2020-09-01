<?php include 'con_db.php'; 
     

      $email=$_GET['email'];

      $sel=mysqli_query($con,"SELECT * FROM user where email='$email'");
      $rws=mysqli_num_rows($sel);
      if($rws > 0)
      {
        echo false;
      }
      else
      {
        echo true;
      }