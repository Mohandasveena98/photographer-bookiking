<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SWAG CREATTION</title>
	
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
								<a class="dropdown-item" href="../dmin/index.php">Admin</a>
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
		<li class="breadcrumb-item active" aria-current="page">Phptographer Registration</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Photographer Registration</h3>
			<div class="row w3ls_banner_bottom_grids">
				<div class="col-lg-12 mt-lg-0 mt-5 wthree_mail_pos">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="w3_agileits_contact_left">
						 <div class="row">
						    <div class="col-lg-3">
								<input type="text" name="pname" autocomplete="off" pattern="[A-Za-z]+" title="letters only" placeholder="Photographer name" required="">
							</div>
							<div class="col-lg-3">
								<input type="file" name="photo" required="">
							</div>
							<div class="col-lg-3">
								<input type="radio" name="gender" autocomplete="off" value="male" checked=""> Male
								<input type="radio" name="gender" autocomplete="off" value="female"> Female
							</div>
							<div class="col-lg-3">
								<input type="text" name="contact" autocomplete="off" pattern="^\d{10}$" title="10 numeric characters only" placeholder="Contact Number" required="">
							</div>
						 </div>
						 <div class="row">
						    <div class="col-lg-3">
								<input type="email" name="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"s placeholder="Enter your email" required="">
							</div>
							<div class="col-lg-3">
								<input type="date" name="dob" autocomplete="off" max="2000-01-01" onchange="showAge(this.value)" required="">
							</div>
							<div class="col-lg-3">
								<input type="text" name="age" autocomplete="off" placeholder="Age" id="age" readonly="">
							</div>
							<div class="col-lg-3">
								<input type="text" name="fname" autocomplete="off" pattern="[A-Za-z]+" title="letters only" placeholder="Enter Firm Name" required="">
							</div>
						 </div>
						 <div class="row">
						 	<div class="col-lg-3">
								<input type="email" name="femail" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"placeholder="Enter firm email" required="">
							</div>
						    <div class="col-lg-3">
								<input type="text" name="faddress" autocomplete="off" pattern="^[a-zA-Z][a-zA-Z0-9-_\,]$" title="alphanumeric" placeholder="Entr Firm Address" required="">
							</div>
							<div class="col-lg-3">
								<input type="text" name="fcontact" autocomplete="off" pattern="^\d{10}$" title="10 numeric characters only" placeholder="Enter firm Contact" required="">
							</div>
							 <div class="col-lg-3">
								<input type="text" name="Experience" autocomplete="off" pattern="^[a-zA-Z][a-zA-Z0-9-_\,]$" title="alphanumeric" placeholder="Write your Experience" required="">
							</div>
					     </div>
						 <div class="row">
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
							<div class="col-lg-4">
								<input type="password" name="password" autocomplete="off" pattern=".{6,}" title="Six or more characters" placeholder="Set a password" required="">
							</div>
							<div class="col-lg-4">
								<input type="password" name="cpassword" autocomplete="off" pattern=".{6,}" title="Six or more characters" placeholder="Re-enter Password" required="">
							</div>
						   
						 </div>
						 <div class="row">
						 	<div class="col-lg-12">
								<textarea name="descp" pattern="[A-Za-z0-9\s]" title="Six or more characters" placeholder="Enter your firm description" required=""></textarea>
							</div>
						 </div>
						
						 <div class="row">
						   <div class="col-lg-3">
						<div class="w3_agileits_contact_right">
						<input type="submit" name="save" value="Register">
						</div>
						</div>
						</div>
						<br><br>
							<a href="index.php" style="font-weight: bold; color: #E91E63;">Back to home</a>
						</div>
						<div class="clearfix"> </div>
					</form>
					<?php if(isset($_POST['save']))
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
                                        $gender=mysqli_real_escape_string($con,$_POST['gender']);
                                        $contact=mysqli_real_escape_string($con,$_POST['contact']);
                                        $email=mysqli_real_escape_string($con,$_POST['email']);
                                        $dob=mysqli_real_escape_string($con,$_POST['dob']);
                                        $age=mysqli_real_escape_string($con,$_POST['age']);
                                        $loc=mysqli_real_escape_string($con,$_POST['location']);
                                        $fname=mysqli_real_escape_string($con,$_POST['fname']);
                                        $femail=mysqli_real_escape_string($con,$_POST['femail']);
                                        $faddress=mysqli_real_escape_string($con,$_POST['faddress']);
                                        $fcontact=mysqli_real_escape_string($con,$_POST['fcontact']);
                                        $Experience=mysqli_real_escape_string($con,$_POST['Experience']);
                                        $password=mysqli_real_escape_string($con,$_POST['password']);
                                        $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
                                        $descp=mysqli_real_escape_string($con,$_POST['descp']);
                                        
                                      if($password==$cpassword)
                                      { 
                                    	$qry=mysqli_query($con,"INSERT INTO `photographer`(`phid`, `phname`, `phimage`, `gender`, `contact`, `email`, `pwd`, `dob`, `age`, `exp`, `firmname`, `firmaddress`, `firmcontact`, `firmemail`, `firmdescp`, `phstatus`,`location`) VALUES ('','$pname','$image','$gender','$contact','$email','$password','$dob','$age','$Experience','$fname','$faddress','$fcontact','$femail','$descp','new','$loc')") or die(mysqli_error($con));
                                        if($qry)
                                            {
                                                echo '<script>alert("Thank you for the registration"); window.location="index.php"; </script>';
                                            }
                                            else
                                            {
                                                echo '<script>alert("Failed"); window.location="register.php"; </script>';
                                            }
                                       }
                                       else
                                       {
                                       		echo '<script>alert("Password Mismatch"); window.location="register.php"; </script>';
                                       }
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
				<p class="mt-3">Photography studio. </p>
			</div>
			<div class="col-lg-4 col-md-6 footer-grid-middle">
				<h4>About SWAG CREATION</h4>
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
