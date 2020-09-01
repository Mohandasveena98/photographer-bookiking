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
	<meta name="keywords" content=" ****" />
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
					<a class="text-white" href="index.php"><img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;"><i class=""></i>SWAG CREATION</a>
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
							<a class="nav-link" href="../about.php">about</a>
						</li>
						
						<li class="nav-item mr-1">
							<a class="nav-link" href="../contact.php">contact</a>
						</li>
						<li class="nav-item dropdown mr-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								Sign In
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../photographer/index.php">PhotoGrapher</a>
								<a class="dropdown-item" href="../user/index.php">User</a>
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
		<li class="breadcrumb-item active" aria-current="page">Profile</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Edit MyProfile</h3>
			<div class="row w3ls_banner_bottom_grids">
			<?php $sel=mysqli_query($con,"SELECT * FROM user WHERE uid='$uid'");
					$rows=mysqli_fetch_array($sel);
				 ?>
				 <div class="col-lg-4"></div>
				<div class="col-lg-4 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" autocomplete='off' class="form-control" placeholder="Your Name"  value="<?php echo $rows['fullname']; ?>">
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" name="contact" autocomplete='off' class="form-control" placeholder="Your Contact"   value="<?php echo $rows['contact']; ?>">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" autocomplete='off' class="form-control" placeholder="Your Address" title="alphanumeric" value="<?php echo $rows['address']; ?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" autocomplete='off' class="form-control" placeholder="Your Email" title="xyz@something.com" value="<?php echo $rows['email']; ?>">
						</div>
						<div class="form-group">
							<input type="submit" name="save" class="btn btn-success" value="Update">
						</div>
					</form>
					<?php if(isset($_POST['save']))
                                {
                                        $name=mysqli_real_escape_string($con,$_POST['name']);
                                        $contact=mysqli_real_escape_string($con,$_POST['contact']);
                                        $email=mysqli_real_escape_string($con,$_POST['email']);
                                        $address=mysqli_real_escape_string($con,$_POST['address']);
                                        
                                    	$qry=mysqli_query($con,"UPDATE `user` SET `fullname`='$name',`contact`='$contact',`email`='$email',`address`='$address' WHERE uid='$uid'") or die(mysqli_error($con));
                                        if($qry)
                                            {
                                                echo '<script>alert("Updation successfully completed"); window.location="profile.php"; </script>';
                                            }
                                            else
                                            {
                                                echo '<script>alert("Failed"); window.location="profile.php"; </script>';
                                            }
                                      
                                }

                             ?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<br><br>
	<script type="text/javascript">
        function showAge(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
           document.getElementById('age').value=age;
        }
    </script>
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
				<p>We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience.</p>
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
