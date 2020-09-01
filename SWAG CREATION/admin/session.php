<?php 
	session_start();
	$u_name=$_SESSION['u_name'];
	if(!(isset($u_name)))
	{
		header('location:index.php');
	}
?>