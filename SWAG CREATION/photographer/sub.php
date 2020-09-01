<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
	$pid=$_GET['pid'];
	$sq=mysqli_query($con,"SELECT * FROM packages WHERE pid='$pid'");
	$row=mysqli_fetch_array($sq);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SWAG CREATION</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="****" />
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
		<li class="breadcrumb-item active" aria-current="page">Subscribe Here!!!</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Subscribe Here!!!</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-3 w3layouts_mail_grid_left">
				</div>
				<div class="col-lg-8 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post">
						<div class="w3_agileits_contact_left">
						<div class="row">
						 <div class="col-lg-6">
							<label>Package Name</label>
							<input type="text" value="<?php echo $row['pname'];?>" placeholder="Enter Package name" readonly="">
						 </div>
						 <div class="col-lg-6">
							<label>Validity</label>
							<input type="text" value="<?php echo $row['validity'];?>"  placeholder="Enter Validity" readonly="">
						</div>
						</div>
						<div class="row">
						<div class="col-lg-6">
							<label>Amount</label>
							<input type="text" value="<?php echo $row['pamt'];?>"  placeholder="Enter Amount" readonly="">
						</div>
						<div class="col-lg-6">
							<label>Card Number</label>
							<input type="text" pattern="^[0-9]{16}$" title="16 Digit numbers only" placeholder="Enter Card Number" required="">
						</div>
						</div>
						<div class="row">
						  <div class="col-lg-6">
							<label>CVV</label>
							<input type="password" pattern="^[0-9]{3}$" title="3 Digit numbers only"  name="cpass" placeholder="Enter CVV" required="">
						  </div>
						  <div class="col-lg-3">
							<label>Month</label>
							<select style="margin-top: 20px;" required="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						  </div>
						  <div class="col-lg-3">
							<label>Year</label>
							<select style="margin-top: 20px;" required="">
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
								<option value="2030">2030</option>
							</select>
						  </div>
						 </div>

							<div class="w3_agileits_contact_right">
								<input type="submit" name="save" value="Pay">
							</div>
						</div>
						<div class="clearfix"> </div>
					</form>
					<?php include('con_db.php'); 
    				if(isset($_POST['save']))
    				{
    					$str=date('Y-m-d', strtotime('+'.$row['validity']. 'months'));
    				
    							$sql=mysqli_query($con,"INSERT INTO `subscription`(`subid`, `pid`, `phid`, `subsdate`, `subedate`, `substatus`) VALUES ('','$pid','$phid',now(),'$str','active')") or die(mysqli_error($con));
    							if($sql)
                					{
                						echo "<script>alert('Subscription is done'); window.location='home.php';</script>";
                					}
                					else{
                						echo "<script>alert('Sorry! Failed'); </script>";
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
			<img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
				<h2><a href="index.php">SWAG <br> </br><br></br> <br> </br><br></br> CREATION</a></h2>
				<p class="mt-3">Photography studio </p>
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
