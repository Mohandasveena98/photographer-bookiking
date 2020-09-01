<?php 
	include 'con_db.php';
	include 'session.php';
	$id=$_GET['gid'];
	$sq=mysqli_query($con,"DELETE FROM gallery WHERE gid='$id'");
	if($sq)
		{
			echo "<script>alert('Gallery is Deleted'); window.location='view_gallery.php';</script>";
		}
		else{
			echo "<script>alert('Sorry! Delete failed'); window.location='view_gallery.php';</script>";
		}


?>