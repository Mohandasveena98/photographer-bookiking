<?php 
	include 'con_db.php';
	include 'session.php';
	$id=$_GET['pid'];
	$sq=mysqli_query($con,"DELETE FROM packages WHERE pid='$id'");
	if($sq)
		{
			echo "<script>alert('Package Deleted'); window.location='view_package.php';</script>";
		}
		else{
			echo "<script>alert('Sorry! Delete failed');window.location='view_package.php'; </script>";
		}


?>