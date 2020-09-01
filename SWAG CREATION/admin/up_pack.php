<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
	/*$id=$_GET['pid'];
	$sqr=mysqli_query($con,"SELECT * FROM packages WHERE pid='$id'");
	$row=mysqli_fetch_array($sqr);*/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>REDCRAFTS</title>
	
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
		<li class="breadcrumb-item active" aria-current="page">Add Package</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Package Details</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-4 w3layouts_mail_grid_left">
				</div>
				<div class="col-lg-5 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post">
						<div class="w3_agileits_contact_left">
							<input type="text" name="pname" autocomplete="off" pattern="[A-Za-z\s]+" title="letters only" value="<?php echo $row['pname']; ?>" placeholder="Enter a package name" required="">
							<input type="text" name="val" autocomplete="off" pattern="^[1-9]{1,2}$" title="2 digit number only"value="<?php echo $row['validity']; ?>" placeholder="Set package validity" required="">
							<input type="text" name="pamt" autocomplete="off" pattern="^[0-9]{3,4}$" title="1 to 4 digit number onlypattern="^[1-9]{1,2}$" title="2 digit number only" value="<?php echo $row['pamt']; ?>" placeholder="Package Amount" required="">
							<div class="w3_agileits_contact_right">
								<input type="submit" name="save" value="UPDATE">
							</div>
						</div>
						<div class="clearfix"> </div>
					</form>
					<?php include('con_db.php'); 
    				if(isset($_POST['save']))
    				{
    					$pname=mysqli_real_escape_string($con,$_POST['pname']);
    					$val=mysqli_real_escape_string($con,$_POST['val']);
    					$pamt=mysqli_real_escape_string($con,$_POST['pamt']);
    					
    							$sql=mysqli_query($con,"UPDATE packages SET pname='$pname',validity='$val',pamt='$pamt' WHERE pid='$id'") or die(mysqli_error($con));
    							if($sql)
                					{
                						echo "<script>alert('Package Updated'); window.location='view_package.php';</script>";
                					}
                					else{
                						echo "<script>alert('Sorry! Updation failed'); </script>";
                					}
    						
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
				<h2><a href="index.php"><i class="fab mr-2 fa-tripadvisor"></i>Redcrafts</a></h2>
				<p class="mt-3"> Photography studio. </p>
			</div>
			<div class="col-lg-4 col-md-6 footer-grid-middle">
				<h4>About Redcarfts</h4>
				<p>We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience. </p>
			</div>
			
		</div>
		<div class="copyright mt-5">
			<p class="text-center">© 2019 Redcrafts. All Rights Reserved | Design by Reni and Monika</p>
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
