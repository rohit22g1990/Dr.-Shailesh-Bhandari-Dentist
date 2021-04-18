<?php include 'header.php'; ?>
	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contant11-top-bg py-5">
			<div class="container py-md-5">
				<div class="row contact-info-left text-center">
					<div class="col-lg-4 col-md-6 contact-info">
						<div class="contact-gd">
							<span class="fa fa-location-arrow" aria-hidden="true"></span>
							<h4>Address</h4>
							<p>
								<?php echo Common::CLINIC_ADDRESS; ?>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 contact-info">
						<div class="contact-gd">
							<span class="fa fa-phone" aria-hidden="true"></span>
							<h4>Phone</h4>
							<p><a href="tel:<?php echo Common::PHONE_NUMBER_SHAILESH_BHANDARI; ?>"><?php echo Common::PHONE_NUMBER_SHAILESH_BHANDARI; ?></a></p>
							<p><a href="tel:<?php echo Common::PHONE_NUMBER_SHAILESH_BHANDARI; ?>"><?php echo Common::PHONE_NUMBER_SHAILESH_BHANDARI; ?></a></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 contact-info">
						<div class="contact-gd">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
							<h4>Mail</h4>
							<p><a href="<?php echo Common::EMAIL_ADDRESS_SHAILESH_BHANDARI; ?>" class="email"><?php echo Common::EMAIL_ADDRESS_SHAILESH_BHANDARI; ?></a></p>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- //contact-form -->
	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-5">
				<div class="title-content text-left mb-lg-5 mt-4">
					<h6 class="sub-title">Contact Us</h6>
					<h3 class="hny-title">Drop your message for any info <br>or question.</h3>
				</div>
				<div class="row align-form-map">
					<div class="col-lg-6 form-inner-cont">
						<form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
							<div class="form-input">
								<label for="w3lName">Name*</label>
								<input type="text" name="w3lName" id="w3lName" placeholder="" />
							</div>
							<div class="form-input">
								<label for="w3lSender">Email*</label>
								<input type="email" name="w3lSender" id="w3lSender" placeholder="" required="" />
							</div>

							<div class="form-input">
								<label for="w3lMessage">Message*</label>
								<textarea placeholder="" name="w3lMessage" id="w3lMessage" required=""></textarea>
							</div>
						
							<button type="submit" class="btn btn-contact">Submit</button>

						</form>
					</div>
					<div class="map col-lg-6 pl-lg-4">
						
						<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Dr%20Shailesh%20Bhandari%20Advance%20dental%20n%20orthodontic%20centre%20in%20Manmad,%20Nashik&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						<a href="https://123movies-to.org"></a><br>
						<style>.mapouter{
							position:relative;text-align:right;height:500px;width:600px;}
						</style>
						<a href="https://www.embedgooglemap.net">
							google map location for website
						</a>
						<style>.gmap_canvas {
							overflow:hidden;background:none!important;height:500px;width:600px;
							}
						</style>
					
					</div>
					
				</div>
			</div>
	</section>
	<!-- //contact-form -->
	<?php  ?>

<?php 
include 'footer.php';

if(!empty($_REQUEST['map']) && $_REQUEST['map'] == 'true') {
?>

<script>

	
$(document).ready(function () {
    // Handler for .ready() called.
	$('html, body').animate({
        scrollTop: $(".title-content").offset().top
    }, 2000);
	
});

</script>


<?php
}


?>