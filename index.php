<?php 
	include 'header.php';
	$services = Common::getServices();
?>
<!--banner-slider-->
  <!-- main-slider -->
	<section class="w3l-main-slider" id="home">
		<div class="banner-content">
			<div class="owl-one owl-carousel">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Dental care for life</h6>
										<h5>Experience, trust and proven success
										</h5>
										<a class="btn mt-sm-5 mt-4" href="services.php">View Our Services</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
			<ul class="slide-social-icons list-unstyled">
				<li class="share">
					<button class="btn btn-success mt-4 book-appointment-button"  data-toggle="modal" data-target=".bd-example-modal-lg"> Book Appointment </button>
				</li>
				<!-- <li>
					<a href="#" class="w3pvt_facebook">
						<span class="fa fa-facebook-f"></span>
					</a>
				</li>
				<li>
					<a href="#" class="w3pvt_twitter">
						<span class="fa fa-twitter"></span>
					</a>
				</li>
				<li>
					<a href="#" class="w3pvt_dribble">
						<span class="fa fa-dribbble"></span>
					</a>
				</li>
				<li>
					<a href="#" class="w3pvt_google">
						<span class="fa fa-google-plus"></span>
					</a>
				</li> -->
			</ul>
		</div>

	</section>
	<!-- /main-slider -->
	<!-- //banner-slider-->
	<!-- /content-6-->
	<section class="w3l-content-6">
		<!-- /content-6-main-->
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="title-content text-left mb-4">
					<h6 class="sub-title">About Us</h6>
					<h4 class="hny-title">Welcome to <?php echo Common::CLINIC_NAME; ?></h4>
				</div>
				<div class="content-info-in row">
					<div class="content-gd col-lg-6 pl-lg-4">
						<p>
							One among the most popular dentists in the city is Dr Shailesh Bhandari Advance dental n orthodontic centre in Manmad, Nashik. Understanding that tooth related issues can be scary for many, this dentist has a very calm approach when treating patients which helps keep them calm. The dental facility stands located in Manmad which makes it hassle-free for people from near and far alike to visit and consult the dentist. It occupies a strategic location at M.G Road, Gandhi Chowk, Near Uttam General Store which makes it easy to locate the dentist's centre.
						</p>
					</div>
					<div class="content-gd col-lg-6 pl-lg-4 pl-lg-4">
						<p>
							Dr Shailesh Bhandari Advance dental n orthodontic centre in Manmad, Nashik holds immense popularity in the city for being a dental facility equipped with advanced dental equipment for better treatment of patients. Right from regular dental check-ups and cleaning to more serious dental procedures, this dentist ensures every single issue is tackled with care and in a way that the patient feels at ease. There is a waiting area and a dedicated consultation area which ensures the patients feel at ease. Apart from the tooth and gum issues, the suggestions given by the dentist for maintaining proper dental health prove to be quite effective. Post-treatment care and prevention are given equal importance as that given to the procedures. The dentist offers medical services like Tooth Extraction, Dental Examination, Dental Implant Fixing to name a few.
						</p>
					</div>

				</div>
		</div>
	</section>
	<!-- //content-6-->
	<!-- services block3 -->
	<div class="w3l-open-block-services py-5">
		<div class="container py-lg-5 pt-4">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="card text-center">
						<div class="icon-holder">
							<img src="assets/images/teeth-white.jpg" class="img-fluid custom-icon-holder" alt="">
						</div>
						<h4 class="mission">Teeth Whitening</h4>
						<div class="open-description">
							<p>
								Teeth whitening is a process of removing stains from the tooth surface and restoring the natural color of the teeth.	
							</p>
							<a href="#read" data-toggle="modal" class="service-teeth-whitening"  data-target=".services-modal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-md-0 mt-5 pt-md-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<img src="assets/images/dental-implant.jpg" class="img-fluid custom-icon-holder" alt="">
						</div>
						<h4 class="mission">Dental Implant</h4>
						<div class="open-description">
							<p>Dental implants are easily the most popular and also the ideal solution, for replacing your missing tooth/teeth</p>
							<!-- <a href="#read" data-toggle="modal" data-target=".dental-implant-modal">Read More</a> -->
							<a href="#read" data-toggle="modal" class="service-dental-implant" data-target=".services-modal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 pt-lg-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<img src="assets/images/ceramic-crowns.jpg" class="img-fluid custom-icon-holder" alt="">
						</div>
						<h4 class="mission">Ceramic Crowns</h4>
						<div class="open-description">
							<p>Dental Crowns are a tooth-shaped cap which is placed on the tooth to restore the shape, size, and ...</p>
							<a href="#read" data-toggle="modal" class="service-dceramic-crowns" data-target=".services-modal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 pt-lg-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<img src="assets/images/teeth-extraction.jpg" class="img-fluid custom-icon-holder" alt="">
						</div>
						<h4 class="mission">Extraction</h4>
						<div class="open-description">
							<p>Tooth extraction is performed by a dentist or oral surgeon and is a relatively quick outpatient ...</p>
							<a href="#read" data-toggle="modal" class="service-teeth-extraction" data-target=".services-modal">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services block3 -->
	<!-- /w3l-content-with-photo-4-->
	<section class="w3l-content-with-photo-4">
		<!-- /content-grids-->
		<div class="content-photo-info py-5">
			<div class="container py-lg-5">
				<!-- /row-->
				<div class="content-photo-grids row">

					<div class="photo-6-inf-right col-lg-6 text-left pr-lg-5 mb-lg-0 mb-4">
						<h6 class="sub-title">We care your smile</h6>
						<h3 class="hny-title">Dental Health Services
						</h3>
						<div class="servehny-1 mt-4">
							<div class="ser-sub">
								<a href="#link" class="ser1"><span class="fa fa-check"></span> Family & general
									dentistry</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> Implant dentistry
								</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> Cosmetic dentistry
								</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> Using Best Quality
									tools.</a>
							</div>
							<div class="ser-sub">
								<a href="#link" class="ser1"><span class="fa fa-check"></span> Emergency dental services
								</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span> Cosmetic dentistry</a>

								<a href="#link" class="ser1"><span class="fa fa-check"></span> Teeth whitening</a>
							</div>
						</div>
						<div class="read">
							<a class="btn mt-4" href="services.php">Read More</a>
						</div>
					</div>
					<div class="photo-6-inf-left col-lg-6 pr-lg-4 image1">
						<a href="#"><img src="assets/images/g1.jpg" class="img-fluid" alt=""></a>
					</div>
				</div>
				<!-- //row-->
			</div>
		</div>
	</section>
	<!-- /w3l-content-with-photo-4-->


	<!-- /specification-6-->
	<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-5">
				<div class="row story-6-grids text-left">
					<div class="col-lg-5 story-gd">
						<img src="assets/images/ab1.jpg" class="img-fluid image1" alt="/">
					</div>
					<div class="col-lg-7 story-gd pl-lg-4">
						<div class="title-content text-left mb-lg-5 mt-4">
							<h6 class="sub-title">For a New smile</h6>
							<h3 class="hny-title">Caring Technologies For Your Dental Health</h3>
							<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam
								animi
								consequatur saepe blanditiis.Lorem ipsum dolor sit amet</p>
						</div>
						<div class="skill_info mt-lg-5 mt-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">165</p>
										<h4>Daily appointments</h4>
										<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit
										</p>
									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">563</p>
										<h4>Happy Clients</h4>
										<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //specification-6-->
	<section class="w3l-about5">
		<div class="container-fluid px-0">
			<div class="history-info position-relative">
				<div class="heading text-center mx-auto">
					<h3 class="hny-title two">Creating the healthy smile you want through science and artistry.</h3>
					<p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui officia
						sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
					<a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
						<span class="video-play-icon">
							<span class="fa fa-play"></span>
						</span>
					</a>
				</div>
				<div class="position-relative">

					<!-- <a href="#popup-video" class="play-view text-center position-absolute">
							<span class="video-play-icon">
								<span class="fa fa-play"></span>
							</span>
						</a> -->


					<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<iframe src="https://player.vimeo.com/video/169036704" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>

					<style type="text/css">
						/* Styles for dialog window */
						#small-dialog {
							background: white;
							padding: 5px;
							max-width: 750px;
							margin: 40px auto;
							position: relative;
						}

						div#small-dialog iframe {
							width: 100%;
							height: 400px;
							display: block;
						}


						/**
		   * Fade-zoom animation for first dialog
		   */

						/* start state */
						.my-mfp-zoom-in .zoom-anim-dialog {
							opacity: 0;

							-webkit-transition: all 0.2s ease-in-out;
							-moz-transition: all 0.2s ease-in-out;
							-o-transition: all 0.2s ease-in-out;
							transition: all 0.2s ease-in-out;



							-webkit-transform: scale(0.8);
							-moz-transform: scale(0.8);
							-ms-transform: scale(0.8);
							-o-transform: scale(0.8);
							transform: scale(0.8);
						}

						/* animate in */
						.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
							opacity: 1;

							-webkit-transform: scale(1);
							-moz-transform: scale(1);
							-ms-transform: scale(1);
							-o-transform: scale(1);
							transform: scale(1);
						}

						/* animate out */
						.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
							-webkit-transform: scale(0.8);
							-moz-transform: scale(0.8);
							-ms-transform: scale(0.8);
							-o-transform: scale(0.8);
							transform: scale(0.8);

							opacity: 0;
						}

						/* Dark overlay, start state */
						.my-mfp-zoom-in.mfp-bg {
							opacity: 0;
							-webkit-transition: opacity 0.3s ease-out;
							-moz-transition: opacity 0.3s ease-out;
							-o-transition: opacity 0.3s ease-out;
							transition: opacity 0.3s ease-out;
						}

						/* animate in */
						.my-mfp-zoom-in.mfp-ready.mfp-bg {
							opacity: 0.8;
						}

						/* animate out */
						.my-mfp-zoom-in.mfp-removing.mfp-bg {
							opacity: 0;
						}



						/**
		   * Fade-move animation for second dialog
		   */

						/* at start */
						.my-mfp-slide-bottom .zoom-anim-dialog {
							opacity: 0;
							-webkit-transition: all 0.2s ease-out;
							-moz-transition: all 0.2s ease-out;
							-o-transition: all 0.2s ease-out;
							transition: all 0.2s ease-out;

							-webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							-moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							-ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							-o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							transform: translateY(-20px) perspective(600px) rotateX(10deg);

						}

						/* animate in */
						.my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
							opacity: 1;
							-webkit-transform: translateY(0) perspective(600px) rotateX(0);
							-moz-transform: translateY(0) perspective(600px) rotateX(0);
							-ms-transform: translateY(0) perspective(600px) rotateX(0);
							-o-transform: translateY(0) perspective(600px) rotateX(0);
							transform: translateY(0) perspective(600px) rotateX(0);
						}

						/* animate out */
						.my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
							opacity: 0;

							-webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							-moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							-ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							-o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							transform: translateY(-10px) perspective(600px) rotateX(10deg);
						}

						/* Dark overlay, start state */
						.my-mfp-slide-bottom.mfp-bg {
							opacity: 0;

							-webkit-transition: opacity 0.3s ease-out;
							-moz-transition: opacity 0.3s ease-out;
							-o-transition: opacity 0.3s ease-out;
							transition: opacity 0.3s ease-out;
						}

						/* animate in */
						.my-mfp-slide-bottom.mfp-ready.mfp-bg {
							opacity: 0.8;
						}

						/* animate out */
						.my-mfp-slide-bottom.mfp-removing.mfp-bg {
							opacity: 0;
						}
					</style>

					<!-- popup -->
					<div id="popup-video" class="pop-overlay">
						<div class="popup">
							<div class="align-popup-video">
								<iframe src="https://www.youtube.com/embed/JemJbNJ4ZtU" frameborder="0"
									allowfullscreen></iframe>
								<a class="close" href="#portfolio">&times;</a>
							</div>

						</div>
					</div>
					<!-- /popup -->
				</div>
			</div>
		</div>
	</section>
	<!--/testimonials-->
	<!-- <section class="w3l-free-consultion">
		<div class="container">
			<div class="consultation-grids">
				<div class="apply-form">
					<h5>Free Consultation</h5>
					<form action="#" method="post">
						<div class="admission-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name*" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone Number*" required="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email*" required="">
							</div>
							<select class="form-control">
								<option>Dental Crowns</option>
								<option>Teeth whitening</option>
								<option>Others</option>
							</select>
						</div>
						<div class="form-group">
							<textarea name="Comment" class="form-control" placeholder="Message*" required=""></textarea>
						</div>
						<button type="submit" class="btn btn-primary submit">Get a Free Consultation</button>
					</form>
				</div>
				<div class="consultation-img">
					<img src="assets/images/ab.jpg" class="img-fluid" alt="/">
				</div>
			</div>
		</div>
	</section> -->
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-lg-5 py-4">
			<div class="container py-lg-5">
				<div class="row pb-lg-4 pb-5">
					<div class="col-md-10 mx-auto">
						<div class="owl-two owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="text-content">
										<div class="test-left">
											<div class="img-circle">
												<img src="assets/images/c1.jpg" class="img-fluid testimonial-img"
													alt="client">
											</div>
											<div class="name">
												<h4>Phillip Hunt</h4>
												<p class="description">Example Company</p>
											</div>
										</div>
										<div class="message">
											<div class="quote-icon"><span class="fa fa-quote-left"
													aria-hidden="true"></span></div>
											<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
												accusantium
												officia quod quasi necessitatibus perspiciatis.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
												commodo consequat</p>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="text-content">
										<div class="test-left">
											<div class="img-circle">
												<img src="assets/images/c2.jpg" class="img-fluid testimonial-img"
													alt="client">
											</div>
											<div class="name">
												<h4>Sara Grant</h4>
												<p class="description">Example Company</p>
											</div>
										</div>
										<div class="message">
											<div class="quote-icon"><span class="fa fa-quote-left"
													aria-hidden="true"></span></div>
											<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
												accusantium
												officia quod quasi necessitatibus perspiciatis.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
												commodo consequat</p>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="text-content">
										<div class="test-left">
											<div class="img-circle">
												<img src="assets/images/c4.jpg" class="img-fluid testimonial-img"
													alt="client">
											</div>
											<div class="name">
												<h4>Luke Jacobs</h4>
												<p class="description">Example Company</p>
											</div>
										</div>
										<div class="message">
											<div class="quote-icon"><span class="fa fa-quote-left"
													aria-hidden="true"></span></div>
											<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
												accusantium
												officia quod quasi necessitatibus perspiciatis.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
												commodo consequat</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function(){
			$('.book-appointment-button').click(function(){
				$('.appointment-1').show();
				$('.appointment-2').hide();
				$('.appointment-3').hide();
			});
		});
	</script>
	<!--//testimonials-->
	<?php include 'footer.php'; ?>
	<?php include 'modals/appointment/bookAppointment.php'; ?>
	<?php //include 'modals/services/teeth-whitening.php';?>
	<?php //include 'modals/servicesMoreInfo.php';?>
	<?php include 'modals/servicesModal.php'; ?>

	