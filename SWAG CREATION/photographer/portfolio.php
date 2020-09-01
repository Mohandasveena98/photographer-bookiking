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
		<li class="breadcrumb-item active" aria-current="page">Create Portfolio</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container-fluid pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Create Portfolio</h3>
			<div class="row">
			    <div class="col-lg-1"></div>
				<div class="col-lg-4">
					<form action="" method="post">
						<div class="form-group">
							<label>Firm name</label>
							<input type="text" name="fname" autocomplete="off" placeholder="Enter Your Firm Name" pattern="[A-Za-z]+" title="letters only" class="form-control">
						</div>
						<div class="form-group">
							<label>Firm Contact</label>
							<input type="text" name="fcontact" id="contact" autocomplete="off" placeholder="Enter Your Firm Contact" onchange="showContact(this.value)" pattern="^\d{10}$" title="10 numeric characters only" class="form-control">
							<div id="divmsg"></div>
						</div>
						<div class="form-group">
							<label>Working Time</label>
							<div class="row">
							   <div class="col-lg-6">
								   <input type="time" name="ftime" autocomplete="off" class="form-control" placeholder="From Time" required="">
								</div>
								<div class="col-lg-6">
								   <input type="time" name="ttime" autocomplete="off" class="form-control" placeholder="To Time" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Working Days</label>
							<select name="days[]" class="form-control" multiple="" required="">
								<option value="All">All</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
								<option value="Saturday">Saturday</option>
							</select>
						</div>
						<div class="form-group">
							<label>About Firm</label>
							<textarea name="afirm" placeholder="About your firm" autocomplete="off" rows="5" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success">
						</div>
					</form>
					<?php include('con_db.php'); 
    				if(isset($_POST['submit']))
    				{
    					$fname=mysqli_real_escape_string($con,$_POST['fname']);
    					$ftime=mysqli_real_escape_string($con,$_POST['ftime']);
    					$ttime=mysqli_real_escape_string($con,$_POST['ttime']);
    					$wtime=date('h:i a',strtotime($ftime)).'-'.date('h:i a',strtotime($ttime));
    					$fcontact=mysqli_real_escape_string($con,$_POST['fcontact']);
    					$afirm=mysqli_real_escape_string($con,$_POST['afirm']);
    					$days=implode(',',$_POST['days']);
    					$qry=mysqli_query($con,"SELECT * from portfolio where phid='$phid' and firmname='$fname' and contact='$fcontact'") or die(mysqli_error($con));
    					$rows=mysqli_num_rows($qry);
    					if($rows<=0)
    					{
    						
    							$sql=mysqli_query($con,"INSERT INTO `portfolio`(`port_id`, `phid`, `firmname`, `about`, `wtimings`, `wdays`, `contact`) VALUES ('','$phid','$fname','$afirm','$wtime','$days','$fcontact')") or die(mysqli_error($con));
    							if($sql)
                					{
                						echo "<script>alert('Portfolio Created'); window.location='portfolio.php';</script>";
                					}
                					else{
                						echo "<script>alert('Sorry! Insertion failed'); </script>";
                					}
    						}
    						else{
    							echo "<script>alert('Data Exist'); </script>";
    						}
    				}
    			?>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-4">
					<form action="" method="post">
						<div class="form-group">
							<label>Specification</label>
							<select name="spec" class="form-control" required="">
								<option value="">Select Speciality</option>
								<option value="Video Production">Video Production</option>
								<option value="Photography">Photography</option>
								<option value="Editing">Editing</option>
								<option value="Advertising">Advertising</option>
								<option value="Event Photography">Event Photography</option>
								<option value="Audio Visual Studio">Audio Visual Studio</option>
							</select>
						</div>
						<div class="form-group">
							<label>Charges</label>
							<input type="text" name="charges" autocomplete="off" placeholder="Enter Charge" pattern="[0-9]{3,5}" title="3 to 5 digit numbers" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="save_charge" autocomplete="off" value="Submit" class="btn btn-info">
						</div>
					</form>
					<?php include('con_db.php'); 
    				if(isset($_POST['save_charge']))
    				{
    					$spec=mysqli_real_escape_string($con,$_POST['spec']);
    					$charges=mysqli_real_escape_string($con,$_POST['charges']);
    					
    					$qry=mysqli_query($con,"SELECT * from charges where phid='$phid' and speciality='$spec' and charge='$charges'") or die(mysqli_error($con));
    					$rows=mysqli_num_rows($qry);
    					if($rows<=0)
    					{
    						
    							$sql=mysqli_query($con,"INSERT INTO `charges`(`chid`, `phid`, `speciality`, `charge`) VALUES ('','$phid','$spec','$charges')") or die(mysqli_error($con));
    							if($sql)
                					{
                						echo "<script>alert('Specification added'); window.location='portfolio.php';</script>";
                					}
                					else{
                						echo "<script>alert('Sorry! Insertion failed'); </script>";
                					}
    						}
    						else{
    							echo "<script>alert('Data Exist'); </script>";
    						}
    				}
    			?>
				</div>
			</div>
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
	<script type="text/javascript">
        
              function showContact(contact) {
                
              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
              } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                	if(this.responseText==false)
                	{
                  document.getElementById("contact").value='';
                  document.getElementById('divmsg').innerHTML="Contact already exist";
                  }else if(this.responseText==true)
                	{
                  document.getElementById("contact").value=contact;
                  document.getElementById('divmsg').innerHTML='';
                  }
                }
              }
              xmlhttp.open("GET","showcontact.php?contact="+contact,true);
              xmlhttp.send();
            } 
       </script>
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
