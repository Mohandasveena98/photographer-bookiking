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
	<h3 class="heading text-center mb-sm-5 mb-3">Photographers</h3>
	        <form action="" method="post">
				<div class="row">
				  <div class="col-lg-4"></div>
				  <div class="col-lg-4">
					<select name="location" class="form-control" required="">
						<option value="">Select Location</option>
						<option value="Darbe">Darbe</option>
						<option value="Puttur">Puttur</option>
						<option value="Kankanady">Kankanady</option>
						<option value="Jyothy">Jyothy</option>
						<option value="BC Road">BC Road</option>
						<option value="Nellyady">Nellyady</option>
						<option value="State Bank">State Bank</option>
						<option value="Pumpwell">Pumpwell</option>
					</select>
				  </div>
				  <div class="col-lg-2">
				  	<input type="submit" name="search" value="Search" class="btn btn-info">
				  </div>
				</div>
			</form>
			<br><br>
			<?php 
				if(isset($_POST['search']))
				{
					$loc=mysqli_real_escape_string($con,$_POST['location']);

			?>
			<h3 style="text-align: center; "><?php echo $loc.' Photographers'; ?></h3>
			<div class="row wthree_team_agileinfo">
				<?php 
					$sql=mysqli_query($con,"SELECT * FROM photographer where location='$loc' ORDER BY phname ASC") or die(mysqli_error($con));
					$count=mysqli_num_rows($sql);
					if($count > 0)
					{
					while($row=mysqli_fetch_array($sql)){
				?>
				<div class="col-md-3 well">
					<img src="../photographer/images/<?php echo $row['phimage']; ?>" style="height: 200px; width: 240px;" class="img-circle">
					<hr>
					<h4 style="text-align: center;">Name: <?php echo $row['phname']; ?></h4>
					<h4 style="text-align: center;">Firm: <?php echo $row['firmname']; ?></h4>
					<h4 style="text-align: center;">Location: <?php echo $row['location']; ?></h4>
					<a href="view_info.php?pid=<?php echo $row['phid']; ?>" style="margin-left: 80px;" class="btn btn-success" title="View Profile"><i class="fa fa-eye"></i></a> <a href="queries.php?pid=<?php echo $row['phid']; ?>" class="btn btn-warning" title="Queries"><i class="fa fa-envelope"></i></a>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
			<?php } else { ?>
					<h4 style="text-align: center;color:red; ">No Photographers for the selected location</h4>
				<?php } } else {?>
				<div class="row wthree_team_agileinfo">
				<?php 
					$sql=mysqli_query($con,"SELECT * FROM photographer ORDER BY phname ASC") or die(mysqli_error($con));
					while($row=mysqli_fetch_array($sql)){
				?>
				<div class="col-md-3 well">
					<img src="../photographer/images/<?php echo $row['phimage']; ?>" style="height: 200px; width: 240px;" class="img-circle">
					<hr>
					<h4 style="text-align: center;">Name: <?php echo $row['phname']; ?></h4>
					<h4 style="text-align: center;">Firm: <?php echo $row['firmname']; ?></h4>
					<h4 style="text-align: center;">Location: <?php echo $row['location']; ?></h4>
					<a href="view_info.php?pid=<?php echo $row['phid']; ?>" style="margin-left: 80px;" class="btn btn-success" title="View Profile"><i class="fa fa-eye"></i></a> <a href="queries.php?pid=<?php echo $row['phid']; ?>" class="btn btn-warning" title="Queries"><i class="fa fa-envelope"></i></a>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
			<?php } ?>
		</div>
</section>

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
