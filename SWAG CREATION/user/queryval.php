<?php  
        include('session.php');
        include('con_db.php');
         $phid=$_GET['phid'];
        if(isset($_POST['send'])){
            $q_content=$_POST['q_content'];

            $qry_insert=mysqli_query($con,"INSERT INTO `enquiry`(`enqid`, `uid`, `phid`, `enquiry`, `sentdate`, `response`, `rdate`, `status`) VALUES ('','$uid','$phid','$q_content',now(),'','','user_sent')") or die(mysqli_error($con));
            
              if ($qry_insert) 
                    {
                        echo "<script>alert('Query sent'); 
                        window.location='queries.php?pid=".$phid."'; 
                        </script>";
                    }
                    else
                    {
                        echo "<script>alert('Failed');  window.location='query.php?pid=".$phid."'; </script>";
                    }
        }
    ?>