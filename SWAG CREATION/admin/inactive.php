<?php 
	include 'con_db.php';
	include 'session.php';
	$id=$_GET['pid'];
	$sq=mysqli_query($con,"DELETE FROM photographer WHERE phid='$id'");
	
	if($sq)
		{
			echo "<script>alert('photographer Deleted'); window.location='photographer.php';</script>";
		}
		else{
			echo "<script>alert('Sorry! Delete failed'); </script>";
		}


?>