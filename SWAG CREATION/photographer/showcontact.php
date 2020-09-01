<?php include 'con_db.php'; 
      include 'session.php';

      $contact=$_GET['contact'];

      $sel=mysqli_query($con,"SELECT * FROM portfolio where contact='$contact'");
      $rws=mysqli_num_rows($sel);
      if($rws > 0)
      {
        echo false;
      }
      else
      {
        echo true;
      }