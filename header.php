<?php include_once 'common.php';?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dr. Shailesh Bhandari
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Template CSS -->
</head>

<body>
	<!--w3l-header-->
	<section class="w3l-top-header-content">
		<div class="hny-top-menu">
			<div class="container">
				<div class="row">
					<div class="top-left col-lg-12 text-center">
						<ul class="accounts">
							<li class="top_li"><span class="fa fa-map-o"></span> 
								<a href="contact.php/mapDiv=true">
									<?php echo Common::CLINIC_ADDRESS; ?>	
								</a>
							</li>
							<li class="top_li mr-lg-0 ">
								<span class="fa fa-envelope-o"></span> 
								<a href="mailto:<?php echo Common::EMAIL_ADDRESS_SHAILESH_BHANDARI; ?>" class="mail">
									<?php echo Common::EMAIL_ADDRESS_SHAILESH_BHANDARI; ?>
								</a>
							</li>
							<li class="top_li mr-lg-0">
								<span class="fa fa-phone"></span> 
								<?php
									echo Common::PHONE_NUMBER_SHAILESH_BHANDARI;
								?>
							</li>
						</ul>
					</div>
					<!-- <div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
						<div class="top-bar-text"><a class="bk-button" href="#">BOOK ONLINE </a> You can
							request appointment in 24 hours</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!--//top-header-content-->
	<!--w3l-header-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<a class="navbar-brand" href="index.php"><span>Dr.</span>
					Shailesh Bhandari
					<br /><p class="highlight">Advance dental n orthodontic centre</p>
				</a>
				
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.php">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-lg-auto">
						<li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/index.php' ? 'active' : '';  ?>">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/about.php' ? 'active' : '';  ?>">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/services.php' ? 'active' : '';  ?>">
							<a class="nav-link" href="services.php">Services</a>
						</li>
						
						<li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/contact.php' ? 'active' : '';  ?>">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/orthodontic.php' ? 'active' : '';  ?>">
							<a class="nav-link" href="orthodontic.php">Orthodontics</a>
						</li>
						<li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/gallery.php' ? 'active' : '';  ?>">
							<a class="nav-link" href="gallery.php">Gallery</a>
						</li>
					</ul>
					<div class="call-support">
						<p>Call us for any question</p>
						<h5>9890787291</h5>
					</div>
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>