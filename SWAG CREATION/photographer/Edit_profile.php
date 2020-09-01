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
					<P style="color:white;">
				 <img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
                 </i>SWAG CREATION </a>
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
			<?php $sel=mysqli_query($con,"SELECT * FROM photographer WHERE phid='$phid'");
					$rows=mysqli_fetch_array($sel);
				 ?>
				<div class="col-lg-12 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="w3_agileits_contact_left">
						 <div class="row">
						    <div class="col-lg-4">
								<input type="text" name="pname" autocomplete="off" pattern="[A-Za-z]+" title="letters only" placeholder="Photographer name" value="<?php echo $rows['phname']; ?>">
							</div>
							<div class="col-lg-4">
								<input type="file" name="photo">
							</div>
							
							<div class="col-lg-4">
								<input type="text" name="contact" autocomplete="off" pattern="^\d{10}$" title="10 numeric characters only" placeholder="Contact Number" value="<?php echo $rows['contact']; ?>">
							</div>
						 </div>
						 <div class="row">
						    <div class="col-lg-6">
								<input type="email" name="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"s placeholder="Enter your email" value="<?php echo $rows['firmemail']; ?>"> 
							</div>
							<div class="col-lg-6">
								<input type="text" name="fname" autocomplete="off" pattern="[A-Za-z]+" title="letters only" placeholder="Enter Firm Name" value="<?php echo $rows['firmname']; ?>" >
							</div>
						 </div>
						 <div class="row">
						 	<div class="col-lg-3">
								<input type="email" name="femail" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" placeholder="Enter firm email" value="<?php echo $rows['firmemail']; ?>"  >
							</div>
						    <div class="col-lg-3">
								<input type="text" name="faddress" autocomplete="off"  pattern="^[a-zA-Z][a-zA-Z0-9-_\,]$" title="alphanumeric" placeholder="Entr Firm Address"  value="<?php echo $rows['firmaddress']; ?>">
							</div>
							<div class="col-lg-3">
								<input type="text" name="fcontact" autocomplete="off" pattern="^\d{10}$" title="10 numeric characters only" placeholder="Enter firm Contact" value="<?php echo $rows['firmcontact']; ?>" >
							</div>
							 <div class="col-lg-3">
								<input type="text" name="Experience" autocomplete="off" pattern="[A-Za-z0-9\s]+" title="alphanumeric only" placeholder="Write your Experience" value="<?php echo $rows['exp']; ?>">
							</div>
					     </div>
						 
						 <div class="row">
						 	<div class="col-lg-4">
								<select name="location" class="form-control">
									<option value="<?php echo $rows['location']; ?>" style="background-color: yellow;"><?php echo $rows['location']; ?></option>
									<option value="Maangalore">Mangalore</option>
									<option value="bangalore">bangalore</option>
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
						 	<div class="col-lg-9">
								<textarea name="descp" pattern="[A-Za-z0-9\s]" title="Six or more characters" placeholder="Enter your firm description"><?php echo $rows['firmdescp']; ?></textarea>
							</div>
						 </div>
						
						 <div class="row">
						   <div class="col-lg-3">
						<div class="w3_agileits_contact_right">
						<input type="submit" name="save" value="UPDATE">
						</div>
						</div>
						</div>
						<br><br>
							<a href="profile.php" style="font-weight: bold; color: #E91E63;">Back to Profile</a>
						</div>
						<div class="clearfix"> </div>
					</form>
					<?php if(isset($_POST['save']))
                                {
                                	if(isset($_FILES['photo']['name']))
                                	{
                                    $file = rand(1000,100000)."-".$_FILES['photo']['name'];
                                    $file_loc = $_FILES['photo']['tmp_name'];
                                    $file_size = $_FILES['photo']['size'];
                                    $file_type = $_FILES['photo']['type'];
                                    $folder="images/";
                                    // make file name in lower case
                                    $new_file_name = strtolower($file);
                                    // make file name in lower case
                                    
                                    $image=str_replace(' ','-',$new_file_name);
                                    
                                    if(move_uploaded_file($file_loc,$folder.$image))
                                    {// Start of if image file upload successful
                                        $pname=mysqli_real_escape_string($con,$_POST['pname']);
                                        $contact=mysqli_real_escape_string($con,$_POST['contact']);
                                        $email=mysqli_real_escape_string($con,$_POST['email']);
                                       $loc=mysqli_real_escape_string($con,$_POST['location']);

                                        $fname=mysqli_real_escape_string($con,$_POST['fname']);
                                        $femail=mysqli_real_escape_string($con,$_POST['femail']);
                                        $faddress=mysqli_real_escape_string($con,$_POST['faddress']);
                                        $fcontact=mysqli_real_escape_string($con,$_POST['fcontact']);
                                        $Experience=mysqli_real_escape_string($con,$_POST['Experience']);
                                        $descp=mysqli_real_escape_string($con,$_POST['descp']);
                                   
                                    	$qry=mysqli_query($con,"UPDATE `photographer` SET `phname`='$pname',`phimage`='$image',`contact`='$contact',`email`='$email',`exp`='$Experience',`firmname`='$fname',`firmaddress`='$faddress',`firmcontact`='$fcontact',`firmemail`='$femail',`firmdescp`='$descp',location='$loc' WHERE phid='$phid'") or die(mysqli_error($con));
                                        if($qry)
                                            {
                                                echo '<script>alert("Updation successfully completed"); window.location="profile.php"; </script>';
                                            }
                                            else
                                            {
                                                echo '<script>alert("Failed"); window.location="profile.php"; </script>';
                                            }
                                      
                                    }
                                }
                                		$fname=mysqli_real_escape_string($con,$_POST['fname']);
                                        $femail=mysqli_real_escape_string($con,$_POST['femail']);
                                        $faddress=mysqli_real_escape_string($con,$_POST['faddress']);
                                        $fcontact=mysqli_real_escape_string($con,$_POST['fcontact']);
                                        $Experience=mysqli_real_escape_string($con,$_POST['Experience']);
                                        $descp=mysqli_real_escape_string($con,$_POST['descp']);
                                   		$loc=mysqli_real_escape_string($con,$_POST['location']);

                                    	$qry=mysqli_query($con,"UPDATE `photographer` SET `phname`='$pname',`contact`='$contact',`email`='$email',`exp`='$Experience',`firmname`='$fname',`firmaddress`='$faddress',`firmcontact`='$fcontact',`firmemail`='$femail',`firmdescp`='$descp',location='$loc' WHERE phid='$phid'") or die(mysqli_error($con));
                                        if($qry)
                                            {
                                                echo '<script>alert("Updation successfully completed..!!"); window.location="profile.php"; </script>';
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
				<h4>About swag creation</h4>
				<p>We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience.. </p>
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
