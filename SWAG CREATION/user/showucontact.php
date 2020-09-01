<?php include 'con_db.php'; 

      $contact=$_GET['contact'];

      $sel=mysqli_query($con,"SELECT * FROM user where contact='$contact'");
      $rws=mysqli_num_rows($sel);
      if($rws > 0)
      {
        echo false;
      }
      else
      {
        echo true;
      }