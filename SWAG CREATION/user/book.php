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
	$sq1=mysqli_query($con,"SELECT * FROM charges WHERE phid='$pid'") or die(mysqli_error($con));
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>REDCRAFTS</title>
	
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
		<li class="breadcrumb-item active" aria-current="page">Booking</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<section class="agile-team py-5">
	<div class="container py-lg-5">
	<h3 class="heading text-center mb-sm-5 mb-3"><?php echo 'Book '.$row['phname']; ?></h3>
				<div class="row wthree_team_agileinfo">
				<div class="col-md-1"></div>
				<div class="col-md-10 well">
					<form action="" method="post">
					 <div class="row">
						<div class="form-group col-lg-6">
							<label>Book Category</label>
							<select name="bcat" class="form-control" required="">
								<option value="">Select Category</option>
								<option value="Anniversary">Anniversary</option>
								<option value="Birthday party">Birthday party</option>
								<option value="Wedding Function">Wedding Function</option>
								<option value="Get together">Get together</option>
								<option value="Family Function">Family Function</option>
								<option value="Engagement Function">Engagement Function</option>
							</select>
						</div>
						<div class="form-group col-lg-6">
							<label>Venue</label>
							<input type="text" name="venue" autocomplete="off" placeholder="Enter Event Place" pattern="[A-Za-z\s]+" title="letters only" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-lg-6">
							<label>Booking Date Time</label>
								<input type="datetime-local" name="bdate" autocomplete="off" class="form-control" min="<?php $d=date('d-m-Y'); $t=date('h:i a'); echo $d.'T'.$t; ?>" required="">
						</div>
						<div class="form-group col-lg-6">
							<label>Book For</label><br>
							<?php while($res=mysqli_fetch_array($sq1)){ ?>
								<input type="checkbox" name="spec[]" onclick="showTotal(this.value,this.id)" id="check<?php echo $res['charge']?>" value="<?php echo $res['charge'].'--'.$res['speciality'] ?>"><?php echo $res['speciality'] ?><br>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-lg-6">
							<label>Booking Charge</label>
							<input type="text" name="bcharge" id="bcharge" value="0" autocomplete="off" placeholder="Charge" readonly="" class="form-control">
						</div>
					</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success">
						</div>
					</form>
					<?php include('con_db.php'); 
    				if(isset($_POST['submit']))
    				{
    					$bcat=mysqli_real_escape_string($con,$_POST['bcat']);
    					$venue=mysqli_real_escape_string($con,$_POST['venue']);
    					$bdate=mysqli_real_escape_string($con,$_POST['bdate']);
    					$bcharge=mysqli_real_escape_string($con,$_POST['bcharge']);
    					$adv=$bcharge * 0.20;
    					foreach ($_POST['spec'] as $value) {
						$a=preg_replace('/\d+/u','', $value);
						$arr[] = str_replace('--', '', $a);
						}
						$spec=implode(',',$arr);
    					$qry=mysqli_query($con,"SELECT * from bookingS where phid='$pid' and bdate='$bdate'") or die(mysqli_error($con));
    					$rows=mysqli_num_rows($qry);
    					if($rows<=0)
    					{
    						
    							$sql=mysqli_query($con,"INSERT INTO `bookings`(`bid`, `uid`, `phid`, `bcategory`, `venue`, `bdate`, `bookeddate`, `bstatus`, `facilites`, `bcharges`, `advance`, `apaystatus`) VALUES ('','$uid','$pid','$bcat','$venue','$bdate',now(),'booked','$spec','$bcharge','$adv','')") or die(mysqli_error($con));
    							if($sql)
                					{
                						echo "<script>alert('Booked'); window.location='view_booking.php';</script>";
                					}
                					else{
                						echo "<script>alert('Sorry! booking failed'); </script>";
                					}
    						}
    						else{
    							echo "<script>alert('Already photographer is booked for ".date('d-m-Y h:i a',strtotime($bdate))."'); </script>";
    						}
    				}
    			?>
				</div>					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</section>

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
	<script type="text/javascript">
		function showTotal(spec,id)
		{
			//alert(spec);
			var st=document.getElementById(id).checked;
			//alert(st);
			var bc=0;
			if(st==true)
			{
			var sp=spec.split('--');
			var charge=sp[0];
			console.log('charge');
			bc=parseFloat(document.getElementById('bcharge').value);
			var ch=bc + parseFloat(charge);
			document.getElementById('bcharge').value=ch;
		   }
		   else if(st==false)
			{
			var sp=spec.split('--');
			var charge=sp[0];
			console.log(charge);
			bc=parseFloat(document.getElementById('bcharge').value);
			console.log(bc);
			var ch=bc - parseFloat(charge);
			console.log(ch);
			document.getElementById('bcharge').value=ch;
		   }

		}
	</script>
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