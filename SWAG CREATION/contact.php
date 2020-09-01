<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SWAG CREATION</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Photo Bum Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
	<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

				<h1>
					<P style="color:white;">
					<img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
					<a class="text-white" href="index.php"><i class=""></i>SWAG CREATION</a>
				</h1>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item active mr-1">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item  mr-1">
							<a class="nav-link" href="about.php">about</a>
						</li>
						
						<li class="nav-item mr-1">
							<a class="nav-link" href="contact.php">contact</a>
						</li>
						<li class="nav-item dropdown mr-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								Sign In
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="admin/index.php">Admin</a>
								<a class="dropdown-item" href="photographer/index.php">PhotoGrapher</a>
								<a class="dropdown-item" href="user/index.php">User</a>
								<!-- <div class="dropdown-divider"></div>
								<a class="dropdown-item" href="error.php">404</a> -->
							</div>
						</li>
						<!-- <li>
							<a href="signin.php" class="w3ls-btn"> Sign In </a>
						</li> -->
					</ul>
				</div>

			</nav>
	</header>
	<!-- //header -->
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
	</ol>
</nav>
<!-- //breadcrumbs -->

<!-- mail -->
<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Contact Us</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-6 w3layouts_mail_grid_left">
					<div class="agileits_mail_grid_left">
						<h3>Contact Details</h3>
						<p class="mb-sm-5 mb-3"> </p>
						<ul>
							<li><label><i class="fas fa-map-marker" aria-hidden="true"></i></label>MANGALORE</li>
							<li><label><i class="fas fa-envelope" aria-hidden="true"></i></label><a href="Remi:info@gmail.com">naveenrajuk19988@gmail.com</a><a href="Remi:info@example1.com"></a></li>
							<li><label><i class="fa fa-phone" aria-hidden="true"></i></label>7760487917</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post">
						<div class="w3_agileits_contact_left">
							<h3>Get In Touch</h3>
							<input type="text" name="Name" placeholder="Your Name" required="">
							<input type="email" name="Email" placeholder="Your Email" required="">
							<input type="text" name="Phone" placeholder="Phone Number" required="">
							<textarea placeholder="Your Message..." name="message" required=""></textarea>
							<div class="w3_agileits_contact_right">
								<input type="submit" name="save" value="SEND MESSAGE">
							</div>
						</div>
						<div class="clearfix"> </div>
					</form>
					<?php include('con_db.php'); 
    				if(isset($_POST['save']))
    				{
    					$Name=mysqli_real_escape_string($con,$_POST['Name']);
    					$Email=mysqli_real_escape_string($con,$_POST['Email']);
    					$Phone=mysqli_real_escape_string($con,$_POST['Phone']);
    					$message=mysqli_real_escape_string($con,$_POST['message']);
    					
    						$sql=mysqli_query($con,"INSERT INTO `contact`(`cid`, `name`, `email`, `phone`, `message`, `date`) VALUES ('','$Name','$Email','$Phone','$message',now())") or die(mysqli_error($con));
    						if($sql)
        					{
        						echo "<script>alert('Your message is sent'); window.location='contact.php';</script>";
        					}
        					else{
        						echo "<script>alert('Sorry! failed'); </script>";
        					}
    				}
    			?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- //mail -->

<!-- footer -->

<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			<div class="col-lg-4 footer-grid-left mb-lg-0 mb-4">
				
			<img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
				<h2><a href="index.php">SWAG <br> </br><br></br> <br> </br><br></br> CREATION</a></h2>
				<p class="mt-3">Photography studio </p>
			</div>
			<div class="col-lg-4 col-md-6 footer-grid-middle">
				<h4>About SWAG CREATION</h4>
				<p> We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience. </p>
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