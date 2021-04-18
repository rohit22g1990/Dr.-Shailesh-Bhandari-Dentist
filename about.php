<?php 
include 'header.php';
$doctors = Common::getDoctors(); 
$services = Common::getServices();
?>
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>
	
<!-- feature1 -->
<section class="w3l-feature-1">
	<div class="feature-1sec py-5">
		<div class="container py-lg-5">
			<div class="feature-1-content">
				<img src="assets/images/banner2.jpg" class="img-fluid" alt="" />
				<h3 class="hny-title mt-4">Welcome to Our Clinic</h3>
				<p class="mt-2">Lorem ipsum dolor sit amet,Ea consequuntur .Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elit.</p>
				<div class="read">
					<a class="btn mt-4" href="services.php">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //feature1 -->
	<section class="w3l-content-4">
		<!-- /content-6-section -->
		<div class="content-4-main py-5">
			<div class="container py-lg-5">
				<div class="content-info-in row">
					<div class="content-right col-lg-6 pl-lg-4">
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-globe"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">International Level Doctor</a></h6>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
									consectetur
									adipisicing elit.</p>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-linode"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">Annual Check-ups</a></h6>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
									consectetur
									adipisicing elit.</p>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-heartbeat"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">
										Work with Hearts</a></h6>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
									consectetur
									adipisicing elit.</p>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-handshake-o"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">
										Help at Hand</a></h6>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
									consectetur
									adipisicing elit.</p>
							</div>

						</div>
					</div>
					<div class="content-left col-lg-6 pl-lg-4">
						<h6 class="sub-title">
							Who we are</h6>
						<h3 class="hny-title">
							Why Choose Us</h3>
						<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu
							ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
							culpa quis. Phasellus lacinia</p>
						<img src="assets/images/NashikTimes.jpg" class="img-fluid mt-3" alt="">
					</div>


				</div>

			</div>
		</div>
	</section>
	<!-- //content-6-section -->
	<!--/team-sec-->
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
						<div class="row team-row">
							<div class="col-lg-3 col-md-6 team-left">
								<div class="title-content text-left">
									<h6 class="sub-title">Expert Doctors</h6>
									<h3 class="hny-title">Our Team</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa
										qui
										officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
								</div>
							</div>
							<!-- end team member -->

							<?php
								foreach($doctors as $doctor) {
							?>
								<div class="col-lg-3 col-md-6 team-wrap">
									<div class="team-info text-left">
										<div class="column position-relative">
											<a href="#url">
												<img src="<?php echo $doctor['image']; ?>" alt=""
													class="img-fluid team-image" />
											</a>
										</div>
										<div class="column">
											<h3 class="name-pos"><a href="#url"><?php echo $doctor['name']; ?></a></h3>
											<p><?php echo $doctor['education']; ?></p>
											<div class="social">
												<div class="social-left">
													<a href="<?php echo $doctor['facebookHandle']; ?>" target="_blank" class="facebook">
													<span class="fa fa-facebook" aria-hidden="true"></span></a>
													<?php if (!empty($doctor['twitterHandle'])) { ?> 
														<a href="<?php echo $doctor['twitterHandle']; ?>" target="_blank" class="twitter"><span class="fa fa-twitter"
																aria-hidden="true"></span></a>
													<?php } ?>
													<a href="mailto:tel:<?php echo $doctor['email']; ?>" class="email">
														<span class="fa fa-envelope-o"></span>

													</a>
													<a href="tel:<?php echo $doctor['phone']; ?>" class="phone"><span class="fa fa-phone"></span></a>
												</div>
											
											</div>
										</div>
									</div>
									</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
	</section>
	<!--//team-sec-->
		<!-- grids -->
		<section class="grids-1 py-5">
			<div class="grids py-lg-5">
				<div class="container">
					<h6 class="sub-title">We care your smile</h6>
					<h3 class="hny-title">Featured Services
					</h3>
					
					<div class="row text-center mt-lg-5 mt-4">

						<?php
							foreach($services as $service) {
						?>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="column">
									<a href="#single"><img src="<?php echo $service['image']; ?>" height="300" width="300" alt="" class="img-responsive" /></a>
									<h4><a href="#single"><?php echo $service['service']; ?></a></h4>
								</div>
							</div>
						<?php		
							}
						?>

						<!-- <div class="col-lg-3 col-md-4 col-sm-6">
							<div class="column">
								<a href="#single"><img src="assets/images/g1_bk.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Periodontal Therapy</a></h4>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mt-sm-0 mt-4">
							<div class="column">
								<a href="#single"><img src="assets/images/g2.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Cosmetic Dentistry</a></h4>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mt-md-0 mt-4">
							<div class="column">
								<a href="#single"><img src="assets/images/g3.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Dental Implants</a></h4>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mt-lg-0 mt-4">
							<div class="column">
								<a href="#single"><img src="assets/images/g4.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Pediatric Dentistry</a></h4>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		<!-- //grids -->
<?php include 'footer.php' ?>