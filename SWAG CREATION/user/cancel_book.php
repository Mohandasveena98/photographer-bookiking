<?php 
	 include 'session.php';
	include 'con_db.php';
	$id=$_GET['id'];
	$sq=mysqli_query($con,"UPDATE bookings SET bstatus='cancelled' WHERE bid='$id'");
	if($sq)
		{
			echo '<script>alert("Cancelled ☺"); window.location="view_booking.php";</script>';
		}
		else
		{
			echo '<script>alert("Failed"); window.location="view_booking.php";</script>';
		}


?>