<?php 
	 include 'session.php';
	include 'con_db.php';
	$id=$_GET['id'];
	$sq=mysqli_query($con,"UPDATE bookings SET bstatus='rejected' WHERE bid='$id'");
	if($sq)
		{
			echo '<script>alert("Rejected ☺"); window.location="bookinglist.php";</script>';
		}
		else
		{
			echo '<script>alert("Failed"); window.location="bookinglist.php";</script>';
		}


?>