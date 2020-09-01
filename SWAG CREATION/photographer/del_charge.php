<?php 
	include 'con_db.php';
	include 'session.php';
	$id=$_GET['sid'];
	$sq=mysqli_query($con,"DELETE FROM charges WHERE chid='$id'");
	if($sq)
		{
			echo "<script>alert('Gallery is Deleted'); window.location='view_portfolio.php';</script>";
		}
		else{
			echo "<script>alert('Sorry! Delete failed'); window.location='view_portfolio.php';</script>";
		}


?>