<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SWAG CREATION</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="*****" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//fonts-->

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner w3ls-banner-inner"> 
	<!-- header -->
		<?php include 'nav.php'; ?>
	<!-- //header -->
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="home.php">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Customer Bookings </li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Booking Details</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-12 mt-lg-0 mt-5 wthree_mail_pos">
					<table class="table table-bordered table-striped table-hover">
							<thead>
							 
							  <tr>
								<th>SL NO</th>
								<th>User</th>
								<th>Contact</th>
								<th>Venue</th>
								<th>Booked Date</th>
								<th>For</th>
								<th>Facilities</th>
								<th>Total</th>
								<th>Action</th>
							  </tr>
							</thead>
							<tbody>
								<?php $i=1;
								$sql=mysqli_query($con,"SELECT * FROM bookings,user where phid='$phid' and bookings.uid=user.uid order by bookeddate DESC");
									while($row=mysqli_fetch_array($sql))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++; ?></td>
								 	<td><?php echo $row['fullname']; ?></td>
								 	<td><?php echo $row['contact']; ?></td>
								 	<td><?php echo $row['venue']; ?></td>
								 	<td><?php echo date('d-m-Y h:i a',strtotime($row['bdate'])); ?></td>
								 	<td><?php echo $row['bcategory']; ?></td>
								 	<td><?php echo $row['facilites']; ?></td>
								 	<td><?php echo $row['bcharges']; ?></td>
								 	<td> 
								 	<?php $bst=$row['bstatus']; 
								 		if($bst=='booked')
								 			{ ?>
								 		<a href="approve.php?id=<?php echo $row['bid']; ?>" class="btn btn-success" title="Approve"><i class="fa fa-check"></i></a> <a href="reject.php?id=<?php echo $row['bid']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');" title="Reject"><i class="fa fa-times"></i></a>
								 	<?php }elseif($bst=='cancelled')
								 			{ 
								 				$rs=$row['refund_status'];
								 				if($rs=='no')
								 				{
								 				?>
								 			<span class="badge badge-danger">User Cancelled</span>
								 			<a href="refund.php?id=<?php echo $row['bid']; ?>" class="btn btn-info">Refund</a>
								 			<?php }else if($rs=='refunded')
								 				{
								 				?>
								 			<span class="badge badge-danger">User Cancelled</span>
								 			<span class="badge badge-warning">Refunded Rs. <?php echo $row['refund_amt']; ?></span>
								 			<?php } } elseif($bst=='approved')
								 			{ ?>
								 			<span class="badge badge-success">Approved</span> 
								 	<?php } elseif($bst=='rejected')
								 			{ ?>
								 			<span class="badge badge-danger">You Rejected</span> 
								 	<?php } ?>
								 	</td>
								 </tr>
								 <?php } ?>
							</tbody>
						</table>
				</div>
				<div class="clearfix"> </div>
			</div>
		
		
	</div>
	<br><br>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			<div class="col-lg-4 footer-grid-left mb-lg-0 mb-4">
				<img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
				<h2><a href="index.php">SWAG <br> </br><br></br> <br> </br><br></br> CREATION</a></h2>
				<p class="mt-3">Photography studio. </p>
			</div>
			<div class="col-lg-4 col-md-6 footer-grid-middle">
				<h4>About SWAG CREATION</h4>
				<p>We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience. </p>
			</div>
			
		</div>
		<div class="copyright mt-5">
		</div>
	</div>
</footer>
<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- //move to top-js-files -->

	<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>
