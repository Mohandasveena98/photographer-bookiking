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
			<a href="adminhome.php">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Photographer</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Photographer Details</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-1 w3layouts_mail_grid_left">
				</div>
				<div class="col-lg-11 mt-lg-0 mt-5 wthree_mail_pos">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Action</th>
								<th>SL NO</th>
								<th>Name</th>
								<th>Image</th>
								<th>Contact</th>
								<th>Exp</th>
								<th>Firmname</th>
								<th>Firmcontact</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;
								$sql=mysqli_query($con,"SELECT * FROM photographer ORDER BY phname ASC") or die(mysqli_error($con));
								while($row=mysqli_fetch_array($sql)){
							?>
							<tr>
								<td><a href="view_photographer.php?pid=<?php echo $row['phid']; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a> <a href="inactive.php?pid=<?php echo $row['phid']; ?>" class="btn btn-danger" onclick="return confirm('Sure to Inactive the user?'); "><i class="fa fa-times"></i></a></td>
								<td><?php echo $i++; ?></td>
								<td><?php echo $row['phname']; ?></td>
								<td><img src="../photographer/images/<?php echo $row['phimage']; ?>" style="height: 70px; width: 70px;" class="img-circle"></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['exp']; ?></td>
								<td><?php echo $row['firmname']; ?></td>
								<td><?php echo $row['firmcontact']; ?></td>
								<td><?php echo $row['phstatus']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<form action="" method="POST">
					<button type="submit" name="report" class="btn btn-warning">Photographer Report</button>
					</form>
					<?php
						 if(isset($_POST['report'])){
							echo "<script>alert('Report'); 
							window.location='report.php'; 
							</script>";
						 }
							
					?>
				</div>
				<div class="clearfix"> </div>
			</div>
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
