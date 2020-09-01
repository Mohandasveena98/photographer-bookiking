<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'con_db.php';
	include 'session.php';
	$bid=$_GET['id'];
	$sq=mysqli_query($con,"SELECT * FROM photographer,bookings,user WHERE bookings.`bid`='$bid' and photographer.phid=bookings.phid and user.uid=bookings.uid");
	$res=mysqli_fetch_array($sq);
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
			<a href="home.php">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">View Invoice </li>
	</ol>
</nav>
<!-- //breadcrumbs -->
	<div id="mail" class="banner-bottom mail contact pt-5">
		<div class="container pt-md-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Bill</h3>
			<div class="row">
                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-md-12">
                            <div id='DivIdToPrint'>
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                      <th colspan="3">
                                          <h3 style="text-align: center;"><?php echo $res['phname']; ?></h3>
                                           <h5 style="text-align: center;"><?php echo $res['contact']; ?></h5>
                                           <h5 style="text-align: center;"><?php echo $res['address']; ?></h5>
                                      </th>
                                  </tr>
                                  <tr>
                                    <th>Book Id: <?php echo 'BCODE'.$res['bid']; ?></th>
                                    <th colspan="2">Date: <?php echo date('d-m-Y h:i a',strtotime($res['bdate'])); ?></th>
                                  </tr>
                                  <tr>
                                    <th style="text-transform: capitalize;">Booked By: <?php echo $res['fullname']; ?></th>
                                    
                                    <th>Advance Amount: <?php echo 'Rs '.$res['advance']; ?></th>
                                    <th>Book Amount: <?php echo 'Rs '.$res['bcharges']; ?></th>
                                  </tr>
                                  <tr>
                                    <th style="text-transform: capitalize;" colspan="3">Opt For: <?php echo $res['facilites']; ?></th>
                                  </tr>
                                  <tr>
                                    <th colspan="3">In Words: Rs. <?php echo getIndianCurrency($res['bcharges'])." only"?></th>
                                  </tr>
                                  <tr>
                                    <th colspan="3" style="text-align: right;">
                                              <br>
                                              -------------------<br>
                                              Signature
                                    </th>
                                  </tr>
                                </thead>
                            </table>
                          </div>
                          <center>
                            <div class="row">
                              <div class="col-md-12 pull-right">
                                <input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>
                              <a href="payments.php" class="btn btn-info btn-sm">Back</a>
                              </div>
                            </div>
                          </center>

                        </div>

                        <!--// Forms-1 -->
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
	<?php

        function getIndianCurrency($number)
        {
            $decimal = round($number - ($no = floor($number)), 2) * 100;
            $hundred = null;
            $digits_length = strlen($no);
            $i = 0;
            $str = array();
            $words = array(0 => '', 1 => 'one', 2 => 'two',
                3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
                7 => 'seven', 8 => 'eight', 9 => 'nine',
                10 => 'ten', 11 => 'eleven', 12 => 'twelve',
                13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
                16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
                19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
                40 => 'forty', 50 => 'fifty', 60 => 'sixty',
                70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
            $digits = array('', 'hundred','thousand','lakh', 'crore');
            while( $i < $digits_length ) {
                $divider = ($i == 2) ? 10 : 100;
                $number = floor($no % $divider);
                $no = floor($no / $divider);
                $i += $divider == 10 ? 1 : 2;
                if ($number) {
                    $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                    $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                    $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
                } else $str[] = null;
            }
            $Rupees = implode('', array_reverse($str));
            $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
            return ($Rupees ? $Rupees . 'rupees ' : '') . $paise;
        }
            ?>
            <script>
          function printDiv() 
          {
            var divToPrint=document.getElementById('DivIdToPrint');

               var htmlToPrint = '<head><title></title><style media="print" >tr {page-break-inside: avoid!important;} table,th,td{border: 1px solid black;} table{border-collapse: collapse; width:100%; } </style></head><body>';

              htmlToPrint += divToPrint.outerHTML;
              newWin = window.open("");
              newWin.document.write(htmlToPrint);
              newWin.focus();
              newWin.print();
            
            setTimeout(function() {
                newWin.close();
                            }, 100);

             
          }
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
