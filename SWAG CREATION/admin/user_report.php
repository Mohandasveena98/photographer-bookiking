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
		<li class="breadcrumb-item active" aria-current="page">Report</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">User Report</h3>
			<div class="row pt-xl-4">
			  <div class="col-lg-1"></div>
				<div class="col-lg-12">
					<div class="panel-body">
				<div class="row">
								<div class="col-md-4">
								<form name="" method="post" action="">
									<div class="form-group">
										<label> Search By Date: </label>
										<input type="date" class="form-control input-sm" name="date" >
										<input type="submit" name="search_by_date" class="btn btn-primary btn-block" value="Submit" >
									</div>
								</form>
								</div>
										
								
							
									
									
							
								<div class="col-md-4">
								<form name="" method="post" action="">
									<label> Search By Month: </label>
										<select class="form-control input-sm" name="month">
											<option value ="01"> January </option>
											<option value ="02"> February </option>
											<option value ="03"> March </option>
											<option value ="04"> April </option>
											<option value ="05"> May </option>
											<option value ="06"> June </option>
											<option value ="07"> July </option>
											<option value ="08"> August </option>
											<option value ="09"> September </option>
											<option value ="10"> October </option>
											<option value ="11"> November </option>
											<option value ="12"> December </option>
											
										</select>
										<input type="submit" name="search_by_month" class="btn btn-primary btn-block" value="Submit" >
										</form>
								</div>
										
								
							
										
								
								<div class="col-md-4">
								<form name="" method="post" action="">
									<label> Search  By Year: </label>
										<select class="form-control input-sm" name="year">
											<option value ="2019"> 2019 </option>
											<option value ="2020"> 2020 </option>
											<option value ="2021"> 2021 </option>
											<option value ="2022"> 2022 </option>
											<option value ="2023"> 2023 </option>
											<option value ="2024"> 2024 </option>
											<option value ="2025"> 2025 </option>
											<option value ="2026"> 2026 </option>
											<option value ="2027"> 2027 </option>
											<option value ="2028"> 2028 </option>
											<option value ="2029"> 2029 </option>
											<option value ="2030"> 2030 </option>
										</select>
										<input type="submit" name="search_by_year" class="btn btn-primary btn-block" value="Submit" >
										</form>
								</div>
							
										
										
							
						</div>
						</div>
						
				<?php
					if(isset($_POST['search_by_date']))
					{
						
				?>
				<div id='DivIdToPrint'>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					 <tr>
						<th>SL NO</th>
						<th>Photographer</th>
						<th>User</th>
						<th>bookings</th>
						<th>Total to pay</th>
						<th>Advance paid</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$date = $_POST['date'];
						include "con_db.php";
						$query = mysqli_query($con,"SELECT * FROM bookings,user,photographer where bookings.phid=photographer.phid and user.uid=bookings.uid and bstatus!='rejected' and bstatus!='cancelled' and `bdate`='$date'");
						
						$i=1;
						while($row = mysqli_fetch_array($query)){
					?>

					<tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $row['phname']; ?></td>
					 	<td><?php echo $row['fullname']; ?></td>
					 	<td><?php echo date('d-m-Y h:i a',strtotime($row['bdate'])); ?></td>
					 	<td><?php echo 'Rs '.$row['bcharges']; ?></td>
					 	<td><?php echo 'Rs '.$row['bcharges'] * 0.20; 
					 			$ps=$row['apaystatus'];
                                     if($ps=='approved')
                                     {
                                ?>
                                <span class="badge badge-warning">Advance not Paid</span>
                               <?php }elseif($ps=='adv_paid')
                                      { ?>
                               <span class="badge badge-danger">Advance Paid. Pending- Rs: <?php echo $row['bcharges']-$row['bcharges'] * 0.20;?></span>
                               <?php }elseif($ps=='')
                                      { ?>
                               <span class="badge badge-info">Not Yet Approved</span>
							   <?php }elseif($ps=='paid')
                                      { ?>
                               <span class="badge badge-info">Full amount payed</span>
                               <?php }?>
					 	</td>
					 </tr>
					
					<?php } ?>
				<tbody>	
			</table>

			
			<div class="well">
			<?php 
			$rr = mysqli_query($con,"SELECT SUM(bcharges) FROM bookings,user,photographer where bookings.phid=photographer.phid and user.uid=bookings.uid and bstatus!='rejected' and bstatus!='cancelled' and `bdate` = '$date'");
			$sum = mysqli_fetch_array($rr);

			$count = mysqli_num_rows($query); ?>
			
				<p><h4><b>Total bookings : <?php echo $count; ?></b></h4></p>
				<p><h4><b>Sum of all total Amount: <?php echo $sum[0]; ?></b></h4></p>
			</div>
			</div>
			<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>
			<!-- /.row -->
			<?php 
					}else if(isset($_POST['search_by_month']))
					{
						
				?>
				<div id="DivIdToPrint">
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					 <tr>
						<th>SL NO</th>
						<th>Photographer</th>
						<th>User</th>
						<th>bookings</th>
						<th>Total to pay</th>
						<th>Advance paid</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$month = $_POST['month'];
						include "con_db.php";
						$query = mysqli_query($con,"SELECT * FROM bookings,user,photographer where bookings.phid=photographer.phid and user.uid=bookings.uid and bstatus!='rejected' and bstatus!='cancelled' and month(`bdate`)='$month'");
						
						$i=1;
						while($row = mysqli_fetch_array($query)){
					?>

					<tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $row['phname']; ?></td>
					 	<td><?php echo $row['fullname']; ?></td>
					 	<td><?php echo date('d-m-Y h:i a',strtotime($row['bdate'])); ?></td>
					 	<td><?php echo 'Rs '.$row['bcharges']; ?></td>
					 	<td><?php echo 'Rs '.$row['bcharges'] * 0.20; 
					 			$ps=$row['apaystatus'];
                                     if($ps=='approved')
                                     {
                                ?>
                                <span class="badge badge-warning">Advance not Paid</span>
                               <?php }elseif($ps=='adv_paid')
                                      { ?>
                               <span class="badge badge-danger">Advance Paid. Pending- Rs: <?php echo $row['bcharges']-$row['bcharges'] * 0.20;?></span>
                               <?php }elseif($ps=='')
                                      { ?>
                               <span class="badge badge-info">Not Yet Approved</span>
							   <?php }elseif($ps=='paid')
                                      { ?>
                               <span class="badge badge-info">Full amount payed</span>
                               <?php }?>
					 	</td>
					 </tr>
					
					<?php } ?>
				<tbody>	
			</table>

			
			<div class="well">
			<?php 
			$rr = mysqli_query($con,"SELECT SUM(bcharges) FROM bookings,user,photographer where bookings.phid=photographer.phid and user.uid=bookings.uid and bstatus!='rejected' and bstatus!='cancelled' and month(`bdate`) = '$month'");
			$sum = mysqli_fetch_array($rr);

			$count = mysqli_num_rows($query); ?>
			
				<p><h4><b>Total bookingss : <?php echo $count; ?></b></h4></p>
				<p><h4><b>Sum of all total Amount: <?php echo $sum[0]; ?></b></h4></p>
			</div>
			</div>
			<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>

			<!-- /.row -->
			<?php 
					}else if(isset($_POST['search_by_year']))
					{
						
				?>
				<div id="DivIdToPrint">
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					 <tr>
						<th>SL NO</th>
						<th>Photographer</th>
						<th>User</th>
						<th>bookings</th>
						<th>Total to pay</th>
						<th>Advance paid</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$year = $_POST['year'];
						include "con_db.php";
						$query = mysqli_query($con,"SELECT * FROM bookings,user,photographer where bookings.phid=photographer.phid and user.uid=bookings.uid and year(`bdate`)='$year' and bstatus!='rejected' and bstatus!='cancelled'");
						
						$i=1;
						while($row = mysqli_fetch_array($query)){
					?>

					<tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $row['phname']; ?></td>
					 	<td><?php echo $row['fullname']; ?></td>
					 	<td><?php echo date('d-m-Y h:i a',strtotime($row['bdate'])); ?></td>
					 	<td><?php echo 'Rs '.$row['bcharges']; ?></td>
					 	<td><?php echo 'Rs '.$row['bcharges'] * 0.20; 
					 			$ps=$row['apaystatus'];
                                     if($ps=='approved')
                                     {
                                ?>
                                <span class="badge badge-warning">Advance not Paid</span>
                               <?php }elseif($ps=='adv_paid')
                                      { ?>
                               <span class="badge badge-danger">Advance Paid. Pending- Rs: <?php echo $row['bcharges']-$row['bcharges'] * 0.20;?></span>
                               <?php }elseif($ps=='')
                                      { ?>
                               <span class="badge badge-info">Not Yet Approved</span>
							   <?php }elseif($ps=='paid')
                                      { ?>
                               <span class="badge badge-info">Full amount payed</span>
                               <?php }?>
					 	</td>
					 </tr>
					
					<?php } ?>
				<tbody>	
			</table>

			
			<div class="well">
			<?php 
			$rr = mysqli_query($con,"SELECT SUM(bcharges) FROM bookings,user,photographer where bookings.phid=photographer.phid and user.uid=bookings.uid and bstatus!='rejected' and bstatus!='cancelled' and year(`bdate`) = '$year'");
			$sum = mysqli_fetch_array($rr);

			$count = mysqli_num_rows($query); ?>
			
				<p><h4><b>Total bookingss : <?php echo $count; ?></b></h4></p>
				<p><h4><b>Sum of all total Amount: <?php echo $sum[0]; ?></b></h4></p>
			</div>
			</div>
			

			<?php 
					}
					
			?>			

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
