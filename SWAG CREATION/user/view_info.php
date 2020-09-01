<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
	$pid=$_GET['pid'];
	$sql=mysqli_query($con,"SELECT * FROM photographer WHERE phid='$pid'") or die(mysqli_error($con));
	$row=mysqli_fetch_array($sql);

	$sq=mysqli_query($con,"SELECT * FROM portfolio WHERE phid='$pid'") or die(mysqli_error($con));
	$rows=mysqli_fetch_array($sq);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SWAG CREATION</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="******" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<style type="text/css">
		.well{
			background-color: #5e8fc3;
			border-radius: 20px;
			padding: 10px;
			margin-left: 5px;
		}
	</style>
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
		<li class="breadcrumb-item active" aria-current="page">Photographers</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<section class="agile-team py-5">
	<div class="container py-lg-5">
	<h3 class="heading text-center mb-sm-5 mb-3"><?php echo $row['phname'].' Portfolio'; ?></h3>
				<div class="row wthree_team_agileinfo">
				<div class="col-md-1"></div>
				<div class="col-md-10 well">
					<center><img src="../photographer/images/<?php echo $row['phimage']; ?>" style="height: 300px; width: 300px;" class="img-circle"></center>
					<hr>
					<h3 style="color: white;">Basic Information</h3>
					<div class="row">
						<div class="col-md-6">
							<h4 style="text-align: left;">Name: <?php echo $row['phname']; ?></h4>
							<h4 style="text-align: left;">Firm: <?php echo $row['firmname']; ?></h4>
							<h4 style="text-align: left;">Gender: <?php echo $row['gender']; ?></h4>
							<h4 style="text-align: left;">Contact: <?php echo $row['contact']; ?></h4>
							<h4 style="text-align: left;">Age: <?php echo $row['age']; ?></h4>
						</div>
						<div class="col-md-6">

							<h4 style="text-align: left;">Exp: <?php echo $row['exp']; ?></h4>
							<h4 style="text-align: left;">Firmname: <?php echo $row['firmname']; ?></h4>
							<h4 style="text-align: left;">Address: <?php echo $row['firmaddress']; ?></h4>
							<h4 style="text-align: left;">Contact: <?php echo $row['firmcontact']; ?></h4>
							<h4 style="text-align: left; margin-bottom: 6px;">Firm Email: <?php echo $row['firmemail']; ?></h4>
						</div>
					</div>
					<hr>
					<h3 style="color: white;">About Information</h3>
					<div class="row">
						<div class="col-md-12">
							<h4 style="text-align: left;"><?php echo $row['firmdescp']; ?></h4>
						</div>
				    </div>
				    <hr>
				    <h3 style="color: white;">Timings Information</h3>
				    <div class="row">
						<div class="col-md-12">
						<?php $count=mysqli_num_rows($sq);
							if($count >0)
							{
						 ?>
							<h4 style="text-align: left; ">Firm Timings: <?php echo $rows['wtimings']; ?></h4>
							<h4 style="text-align: left; ">Days: <?php echo $rows['wdays']; ?></h4>
						<?php }
						else {
						 ?>
						 <h4 style="text-align: center;">Timings not shown</h4>
						<?php } ?>
						</div>
				    </div>
					<hr>
					<div class="row">
						<div class="col-md-12">
						<h4 style="color: white;">Facilities</h4>
					<table class="table table-bordered bg-light">
						<thead>
							<tr>
								<th>SL NO</th>
								<th>Specification</th>
								<th>Charge</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;
								$sql=mysqli_query($con,"SELECT * FROM charges where phid='$pid' ORDER BY speciality ASC") or die(mysqli_error($con));
								while($row=mysqli_fetch_array($sql)){
							?>
								<tr>
								<td><?php echo $i++; ?></td>
								
								
								<td><?php echo $row['speciality']; ?></td>
								<td><?php echo $row['charge']; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					</div>
					</div>
					<?php $sql=mysqli_query($con,"SELECT * FROM charges where phid='$pid' ORDER BY speciality ASC") or die(mysqli_error($con));
						$read=mysqli_num_rows($sql);
						if($read>0)
						{
					 ?>
					<a href="book.php?pid=<?php echo $pid; ?>" class="btn btn-success" style="margin-left: auto; margin-right: auto;" title="Booking Form"><i class="fa fa-calendar"></i> Book Now</a>
					
					<?php } ?>
				</div>
				
					
				<div class="clearfix"> </div>
			</div>
		</div>
</section>

			<div class="projects" id="special">
					<div class="projects-grids">
						<div class="sreen-gallery-cursual">
						<h3 class="heading text-center mb-sm-5 mb-3"><?php echo $row['phname'].' Gallery'; ?></h3>
							<ul id="flexiselDemo1">
							<?php 
								$sq=mysqli_query($con,"SELECT * FROM gallery where phid='$pid' ORDER BY gtitle ASC") or die(mysqli_error($con));
								while($rw=mysqli_fetch_array($sq)){
									$img=explode(',', $rw['images']);
									foreach ($img as $key => $value) 
										{
								?>
								<li>
									<div class="item">
										<div class="projects-agile-grid-info">
											







													<img src="../photographer/images/<?php echo $value ?>" style="width: 300px; height: 330px;">





											<div class="projects-grid-caption">
												
												<h4><?php echo $rw['gtitle']; ?></h4>
											</div>
										</div>
									</div>
								</li>
								<?php } } ?>
							</ul>
						</div>
					</div>
				</div>

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

	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<!-- /Responsive slides js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 4
		  $("#slider4").responsiveSlides({
			auto: true,
			pager:true,
			nav:false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider3").responsiveSlides({
				auto: true,
				pager:false,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		</script>
	<!-- Responsive slides js -->
	
	<!-- middle slider -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 414,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					},
					others: {
						changePoint: 1080,
						visibleItems: 4
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //middle slider -->

	 <!-- stats -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.countup.js"></script>
			<script>
				$('.counter').countUp();
			</script>
	<!-- //stats -->

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