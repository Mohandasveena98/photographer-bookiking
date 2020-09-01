<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
	$pid=$_GET['pid'];
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
        <div class="row">
        <?php include('con_db.php');
        $cdate=date('Y-m-d');
            $sql=mysqli_query($con,"select * from enquiry where uid='$uid' and phid='$pid' and Date(sentdate)='$cdate'");
            $rows=mysqli_fetch_array($sql);
            $nrows=mysqli_num_rows($sql);
            if($nrows<=0){
         ?>
                            <form action="queryval.php?phid=<?php echo $pid; ?>" method="POST">
                                    <textarea id="form_message" name="q_content" style="width: 600px;" class="form-control irs-textarea" rows="8" placeholder="Type Your Queries*" required="required" data-error="Message is required."></textarea><br><br>
                                    <button class="btn btn-success" name="send" type="submit">Send</button>
                                </form>
        <?php } else {
            include 'con_db.php';
            $sq=mysqli_query($con,"select * from enquiry where `uid`='$uid' and `phid`='$pid' order by sentdate asc");
            while($row=mysqli_fetch_array($sq)) 
            { ?>
            <div class="col-md-12">
            <?php
            if($row['status']=='user_sent'){  
            ?>
            <div class="col-md-6 float-right">
              <div class="row"> 
                <div class="col-md-1">
                <?php $stud=mysqli_query($con,"select * from user where uid='$uid'");
                    $read=mysqli_fetch_array($stud);
                 ?>
                <img src="images/1.jpg" style="height: 40px;margin-top: 4px; width: 40px;" class="rounded-circle">
                </div>
                <div class="col-md-8">
                <div style="border: 2px solid black; margin-top: 4px; border-radius: 20px; padding: 8px; "><?php echo $row['enquiry']; ?></div>
                <h6 style="color: green; text-align: right; font-weight: bold;">Sent Time: <?php echo date('d-m-Y',strtotime($row['sentdate'])); ?></h6>
                </div>
              </div>  
            </div>
        <?php } if($row['status']=='pg_sent'){  
            ?>
            <div class="col-md-6 float-left">
              <div class="row">
                <div class="col-md-1">
                <?php $stud=mysqli_query($con,"select * from photographer where phid='$pid'");
                    $read=mysqli_fetch_array($stud);
                 ?>
                <img src="../photographer/images/<?php echo $read['phimage']; ?>" style="margin-top: 4px; height: 40px; width: 40px;"  class="rounded-circle">
                </div>
                <div class="col-md-8">
                <div style="border: 2px solid black; border-radius: 20px; margin-top: 4px; padding: 8px; "><?php echo $row['enquiry']; ?></div>
                <h6 style="color: red; text-align: right; font-weight: bold;">Sent Time: <?php echo date('d-m-Y',strtotime($row['sentdate'])); ?></h6>
                </div>
               </div>
            </div>
        <?php } ?>
        </div>
       <?php } ?>
       <br>
       <a href="askquery.php?phid=<?php echo $pid; ?>" style="margin-top: 20px;" class="btn btn-info">Ask Query</a>
                </div>
       <?php  }?>  
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
				<p>We are professional photographers, Photography is our passion and we have been shooting for a long time.We created best quality photos for our clients.We work for customer's satisfaction by providing flawless service and hassle free experience </p>
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
