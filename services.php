<?php  
	include_once 'dbh.php';
?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Bookings | सफ़र !ndia</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/section.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body onload="city_booked()">

	<?php  ?>

<!-- Home -->
	<section id="header">
		
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html" title="HOME"><i class="ion-earth"></i> सफ़र <span>!ndia</span></a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">about</a></li>
						<li class="active"><a href="services.html">bookings</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				booking
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;bookings</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->
	

	<section class="features section-wrapper">
		<div class="container" >
			<h2 class="section-title">
				Booking Options
			</h2>
			<h4 class="section-title">Starting Point: <span id="start_point"></span></h4>
			<p class="section-subtitle">
				Select Your Travel Options From Below<br>
			</p>
			<!-- mumbai -->
			<div id='mumbai'>
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\air-india.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
							<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Air India
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['MUMBAI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=2";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['MUMBAI']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,603</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(2);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\go-air.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Go Air
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['MUMBAI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD5'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=3";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['MUMBAI']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,583</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(3);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\indigo.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Indigo
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['MUMBAI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD4'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=4";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['MUMBAI']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(4);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <br><br><!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\jet.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Jet Airways
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['MUMBAI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD3'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=5";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['MUMBAI']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(5);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\vistara.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Vistara
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['MUMBAI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD2'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=6";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['MUMBAI']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(6);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <!-- /.row -->
			</div>
			<!-- jaipur -->
			<div id='jaipur'>
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\air-india.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
							<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Air India
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAIPUR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=1";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAIPUR']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,603</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(1);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\go-air.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Go Air
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAIPUR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD5'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=3";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAIPUR']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,583</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(3);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\indigo.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Indigo
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAIPUR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD4'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=4";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAIPUR']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(4);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <br><br><!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\jet.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Jet Airways
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAIPUR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD3'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=5";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAIPUR']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(5);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\vistara.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Vistara
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAIPUR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD2'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=6";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAIPUR']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(6);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <!-- /.row -->
			</div>
			<!-- banglore -->
			<div id='banglore'>
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\air-india.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
							<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Air India
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BANGLORE']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=1";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BANGLORE']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,603</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(1);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\go-air.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Go Air
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BANGLORE']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD5'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=2";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BANGLORE']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,583</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(2);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\indigo.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Indigo
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BANGLORE']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD4'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=4";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BANGLORE']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(4);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <br><br><!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\jet.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Jet Airways
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BANGLORE']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD3'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=5";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BANGLORE']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(5);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\vistara.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Vistara
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BANGLORE']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD2'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=6";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BANGLORE']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(6);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <!-- /.row -->
			</div>
			<!-- bhubhaneshwar -->
			<div id='bhubhaneshwar'>
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\air-india.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
							<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Air India
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BHUBHANESWAR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=1";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BHUBHANESHWAR']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,603</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(1);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\go-air.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Go Air
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BHUBHANESWAR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD5'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=2";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BHUBHANESHWAR']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,583</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(2);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\indigo.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Indigo
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BHUBHANESWAR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD4'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=3";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BHUBHANESHWAR']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(3);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <br><br><!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\jet.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Jet Airways
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BHUBHANESWAR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD3'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=5";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BHUBHANESHWAR']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(5);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\vistara.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Vistara
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['BHUBHANESWAR']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD2'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=6";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['BHUBHANESHWAR']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(6);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <!-- /.row -->
			</div>
			<!-- jammu -->
			<div id='jammu'>
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\air-india.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
							<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Air India
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAMMU']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=1";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAMMU']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,603</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(1);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\go-air.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Go Air
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAMMU']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD5'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=2";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAMMU']. "</h5>";
								
						 ?>
						<!-- <h5 class="section-title">₹2,583</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(2);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\indigo.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Indigo
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAMMU']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD4'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=3";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAMMU']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(3);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <br><br><!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\jet.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Jet Airways
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAMMU']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD3'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=4";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAMMU']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(4);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\vistara.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Vistara
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=6";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['JAMMU']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD2'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=6";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['JAMMU']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(6);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <!-- /.row -->
			</div>
			<!-- kochi -->
			<div id='kochi'>
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\air-india.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
							<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Air India
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=1";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['KOCHI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=1";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['KOCHI']. "</h5>";								
						 ?>
						<!-- <h5 class="section-title">₹2,603</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(1);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\go-air.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Go Air
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=2";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['KOCHI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD5'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=2";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['KOCHI']. "</h5>";								
						 ?>
						<!-- <h5 class="section-title">₹2,583</h5> -->
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(2);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\indigo.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Indigo
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=3";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['KOCHI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD4'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=3";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['KOCHI']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(3);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <br><br><!-- /.row -->
				<div class="row" style="border-bottom: 1px dashed grey;">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\jet.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Jet Airways
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=4";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['KOCHI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD3'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=4";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['KOCHI']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(4);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div><br><br> <!-- /.row -->
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<img src="assets\images\vistara.png" width="35" height="35">
					</div>
					<div class="col-sm-2">
						<h5 class='section-title'>
								<?php
									$sql="SELECT * FROM cities WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['NAME']. "</h5>";
								?>
							</h5>
							<P class='section-subtitle' style="font-size: 12px;">
								Vistara
							</P>
					</div>
					<div class="col-sm-2">
						<h5 class="section-title">
							<?php
									$sql="SELECT * FROM times WHERE id=5";
									$records=mysqli_query($conn, $sql);
									$rows=mysqli_fetch_assoc($records); 
									echo "<h5 class='section-title'>" .$rows['KOCHI']. "</h5>";
							?>
						</p>
						<P class='section-subtitle' style="font-size: 12px;">
							<span id='SD2'></span>
						</P>
					</div>
					<div class="col-sm-2">
						<?php 
							$sql="SELECT * FROM flights WHERE id=5";
							$records=mysqli_query($conn, $sql);
							$rows=mysqli_fetch_assoc($records); 
							echo "<h5 class='section-title'>₹" .$rows['KOCHI']. "</h5>";
								
						 ?>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-info border-radius custom-button" style="width: 150px;" onclick="save_det(5);window.open('pay.html','popUpWindow','height=1000,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes'); ">
							Book
						</button>
					</div> 
					<div class="col-sm-1">
					</div>
				</div> <!-- /.row -->
			</div>
		</div> <!-- /.container -->
	</section> <!-- /.features -->



<div class="section-wrapper sponsor">
		<div class="container">
			<h2 class="section-title">
				Our Partners
			</h2>
			<br>
			<div class="owl-carousel sponsor-carousel">
				<div class="item">
					<a href="http://www.tourism.rajasthan.gov.in/">
						<img src="assets/images/rajlogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://www.odishatourism.gov.in/">
						<img src="assets/images/odishalgo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://www.keralatourism.org/">
						<img src="assets/images/keralogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://www.karnatakatourism.org/">
						<img src="assets/images/karnatakalogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://jktourism.org/">
						<img src="assets/images/JKlogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://uttarakhandtourism.gov.in/">
						<img src="assets/images/uttarakhandlogo.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://www.tourism.rajasthan.gov.in/">
						<img src="assets/images/rajlogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://www.odishatourism.gov.in/">
						<img src="assets/images/odishalgo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://www.keralatourism.org/">
						<img src="assets/images/keralogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://www.karnatakatourism.org/">
						<img src="assets/images/karnatakalogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://jktourism.org/">
						<img src="assets/images/JKlogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://uttarakhandtourism.gov.in/">
						<img src="assets/images/uttarakhandlogo.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://www.tourism.rajasthan.gov.in/">
						<img src="assets/images/rajlogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://www.odishatourism.gov.in/">
						<img src="assets/images/odishalgo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://www.keralatourism.org/">
						<img src="assets/images/keralogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://www.karnatakatourism.org/">
						<img src="assets/images/karnatakalogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="http://jktourism.org/">
						<img src="assets/images/JKlogo.jpg" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="https://uttarakhandtourism.gov.in/">
						<img src="assets/images/uttarakhandlogo.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
			</div> <!-- /.owl-carousel -->
		</div> <!-- /.container -->
	</div> <!-- /.sponsor -->

	<div class="subscribe section-wrapper">
		<a class="brand-logo" href="index.html" title="HOME"><i class="ion-earth"></i> सफ़र <span>!ndia</span></a>
		<p class="subscribe-now">
			Subscribe to our Newsletter
		</p>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
					<div class="input-group">
						<input type="email" class="form-control border-radius" placeholder="Email address">
						<span class="input-group-btn">
							<button class="btn btn-default border-radius custom-sub-btn" type="button" onclick="done()">DONE</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
		</div>
					
	
	
		<ul class="social-icon">
			<li><a href="#"><i class="ion-social-twitter"></i></a></li>
			<li><a href="#"><i class="ion-social-facebook"></i></a></li>
			<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
			<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
		</ul>
	</div> <!-- /.subscribe -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						
					</div>
				</div>
				<div class="col-xs-4">
					&copy; Copyright सफ़र !ndia
				</div>
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</footer>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<script src="assets/js/script.js"></script>
	<script type="text/javascript">
		function city_booked(){
			var cname=sessionStorage.getItem("Start");
			document.getElementById('start_point').innerHTML=cname;
			if(cname==='Mumbai'){
				document.getElementById('mumbai').setAttribute("style", "display:block");
				document.getElementById('jaipur').setAttribute("style", "display:none");
				document.getElementById('banglore').setAttribute("style", "display:none");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:none");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:none");
				document.getElementById('jammu').setAttribute("style", "display:none");	
				document.getElementById('kochi').setAttribute("style", "display:none");	
			}
			else if(cname=='Jaipur'){
				document.getElementById('mumbai').setAttribute("style", "display:none");
				document.getElementById('jaipur').setAttribute("style", "display:block");
				document.getElementById('banglore').setAttribute("style", "display:none");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:none");
				document.getElementById('jammu').setAttribute("style", "display:none");
				document.getElementById('kochi').setAttribute("style", "display:none");		
			}
			else if(cname=='Bengaluru'){
				document.getElementById('mumbai').setAttribute("style", "display:none");
				document.getElementById('jaipur').setAttribute("style", "display:none");
				document.getElementById('banglore').setAttribute("style", "display:block");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:none");
				document.getElementById('jammu').setAttribute("style", "display:none");	
				document.getElementById('kochi').setAttribute("style", "display:none");	
			}
			else if(cname=='Bhubhaneshwar'){
				document.getElementById('mumbai').setAttribute("style", "display:none");
				document.getElementById('jaipur').setAttribute("style", "display:none");
				document.getElementById('banglore').setAttribute("style", "display:none");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:block");
				document.getElementById('jammu').setAttribute("style", "display:none");	
				document.getElementById('kochi').setAttribute("style", "display:none");	
			}
			else if(cname=='Jammu'){
				document.getElementById('mumbai').setAttribute("style", "display:none");
				document.getElementById('jaipur').setAttribute("style", "display:none");
				document.getElementById('banglore').setAttribute("style", "display:none");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:none");
				document.getElementById('jammu').setAttribute("style", "display:block");
				document.getElementById('kochi').setAttribute("style", "display:none");		
			}
			else if(cname=='Kochi'){
				document.getElementById('mumbai').setAttribute("style", "display:none");
				document.getElementById('jaipur').setAttribute("style", "display:none");
				document.getElementById('banglore').setAttribute("style", "display:none");
				document.getElementById('bhubhaneshwar').setAttribute("style", "display:none");
				document.getElementById('jammu').setAttribute("style", "display:none");
				document.getElementById('kochi').setAttribute("style", "display:block");		
			}
		}
		function save_det(id){
			 // alert(id);
			sessionStorage.setItem("id",(id));
		}
		function done(){
		alert('Subscribed! Our weekly newsletter will be hitting your inbox soon!');
	}
	</script>

</body>
</html>