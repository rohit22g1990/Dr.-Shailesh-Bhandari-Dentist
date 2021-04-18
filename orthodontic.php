<?php 
include 'header.php';
$faqs = Common::getOrthodonticsFAQ();
$surgicalfFaqs = Common::getSurgicalOrthodonticsFAQs();
$foodsToAvoid = Common::getFoodsToAvoid();

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
				<h3 class="hny-title mt-4">Orthodontic Treatments</h3>
				<p class="mt-2">
				Orthodontist is the Solution to all your orthodontic needs. We have a dedicated set-up to deliver seamless and time-saving procedures incorporating the most hygienic, safe and comfortable practices. At Mittal’s Advanced Dental & Orthodontic Clinic we treat orthodontic problems in children and adults with regular metal braces, tooth-coloured or clear braces and with invisible lingual braces. Orthodontic treatment is used to improve the appearance, position and function of crooked or abnormally arranged teeth. The benefits of orthodontic treatment include a healthier mouth, a more pleasing appearance, and teeth that are more likely to last a lifetime. Orthodontic treatment can straighten the teeth and move them into a better position. Dr. Sushil Mittal is highly qualified Senior Orthodontist, is committed to offer you high quality treatment solutions at affordable rates.
				</p>
				<!-- <div class="read">
					<a class="btn mt-4" href="services.php">Read More</a>
				</div> -->
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
					<div class="content-right col-lg-12 pl-lg-4">
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<!-- <div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-globe"></span>
								</div>
							</div> -->
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">Early Orthodontic Treatment</a></h6>
								<p>
								The American Association of Orthodontists as well as Indian Orthodontic Society recommends that all children have an Orthodontic screening no later than age 7. The usual policy of wait and watch until all permanent teeth come into the mouth (12 to 13 years), often results in a sacrifice of four healthy permanent teeth as well as compromised and camouflaged late Orthodontic treatment. This can be avoided by starting treatment at the right time. Ideally, a child must be brought in for an Orthodontic check up when he/she is 7 - 8 years old. (Sometimes even earlier in case of harmful habits such as thumb/finger/lip sucking or nail biting or major facial defects such as hare-lip or cleft lip-palate). Active Orthodontic treatment usually starts later and the child is kept under observation till the time is right.
								</p>
							</div>

							
								<div class="col-md-6 content6-right-info">
									<img src="assets/images/early-orthodontics.jpg" width="350"/>
								</div>
							

							
								<div class="col-md-6 content6-right-info">
									<iframe width="350" height="300" src="https://www.youtube.com/embed/TrjSixA7c2I?rel=0" frameborder="0" allowfullscreen=""></iframe>

									<iframe width="350" height="300" src="https://www.youtube.com/embed/80bhnk3MmPw?rel=0" frameborder="0" allowfullscreen=""></iframe>
								</div>
							

						    <div class="col-md-12 content4-right-info">
								<br /><br />
								<h6>Early Orthodontic intervention is needed in two circumstances:-</h6>
								<ol>
									<li>
										To correct disproportionate jaw growth - When either the upper or lower jaw is growing too much or too little, or in the wrong direction, Orthodontic plates can be given to redirect growth. These plates are effective only in actively growing children.
									</li>
									<li>To correct habits like thumb sucking, mouth breathing, tongue thrusting, nail biting etc. as these habits can apply unfavorable forces in teeth and make them either more prominent or crooked. In such situations habit breaking appliances are given as soon as possible.</li>
									
								</ol>
								<p>
								Advantages of Early treatment (also called as Phase I treatment) In a large number of patients a successful Phase I treatment ensures that all permanent teeth get accommodated and more often there is no need to extract permanent teeth at a later stage.

								Front teeth that protrude forward are likely to get injured leading to several dental procedures, for example broken / chipped teeth may require specialized treatment i.e. root canal treatment. Early Orthodontic treatment corrects such teeth rapidly thereby preventing permanent damage.

								When a patient gets rid of his buck-toothed, bunny-rabbit appearance, it is a tremendous facial improvement and is always accompanied by wonderful personality changes. Thus, there is not only a dental but also a mental advantage. In mouths where teeth are unable to find room they may remain trapped inside the jaws; when discovered, these teeth require specialized treatment. These conditions go unnoticed if you wait till 12 years of age to see an Orthodontist
								</p>
							</div>

							
							
						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<!-- <div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-linode"></span>
								</div>
							</div> -->
							<div class="col-md-12 content4-right-info">
								<h6><a href="#">Adult Orthodontics</a></h6>
								<p>
									With improvement in technology and materials more and more adults are considering treatment.

									<br /><b>Most adults consider seeing an orthodontist for two reasons:</b>
								</p>
								<ol>
									<li>
										Their dentist has told them that their teeth are crooked, a problem which will eventually affect their oral health; and/or
									</li>
									<li>
										They are unhappy with the appearance of their face. Large spaces between their teeth, crooked lower teeth, and a protruding over-bite or buck teeth are a few of the most common complaints.
									</li>
								</ol>
								<p>
									<b>Common questions that come in mind when an adult considers seeing an Orthodontist:-</b>
								</p>
								<ul>
								<?php
									foreach($faqs as $faq) {
								?>
									<li>
										<p><b><?php echo $faq['que']; ?></b><br/>
										<?php echo $faq['ans']; ?>
									</li>

								<?php
									}
								?>
								</ul>
								<iframe width="350" height="300" src="https://www.youtube.com/embed/of4s0HRWAyc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<!-- <div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-heartbeat"></span>
								</div>
							</div> -->
							<div class="col-md-10 content4-right-info">
								<h6>
									<a href="#">
										Surgical Orthodontics
									</a>
								</h6>
								<p>
								Bad bites (malocclusion) and crooked teeth are usually corrected by an Orthodontist. Abnormalities of the jaw are usually corrected by an Oral & Maxillofacial Surgeon. When both conditions exist, it is common to find an Orthodontist and Oral Surgeon working together to correct the deformity.
								</p>

								<ul>
								<?php
									foreach($surgicalfFaqs as $faq) {
								?>
									<li>
										<p><b><?php echo $faq['que']; ?></b><br/>
										<?php echo $faq['ans']; ?>
									</li>

								<?php
									}
								?>
								</ul>

								<br />
								<p>
									However, Surgical Orthodontic procedures are not new or experimental; they are routinely performed in offices or hospitals on a regular basis. If you or a member of your family are about to undergo Surgical Orthodontic treatment, your Oral Surgeon would explain the risks, to set your mind at ease.
								</p>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<!-- <div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-handshake-o"></span>
								</div>
							</div> -->
							<div class="col-md-10 content4-right-info">
								<h6>
									<a href="#">
										Life with Braces
									</a>
								</h6>
								<p>
								<b>Eating with Braces</b> What can you eat? Let's talk about what you shouldn't eat! If you've been wanting to drop a few Kg’s, the first week wearing braces is just your chance! For the first day or so, stick to soft foods. Avoid tough meats, hard breads, and raw vegetables. Before long, you'll be able to bite a cucumber again. But you'll need to protect your Orthodontic appliances when you eat, for as long as you're wearing braces.
								</p>
								<div class='align-center' style="text-align: center;">
									<img src="assets/images/benefits-of-orthodontic-treatment.jpg" height="300" width="300" >
								</div>


								<ul>
									<?php
										foreach($foodsToAvoid as $food) {
									?>
										<li>
											<?php echo $food; ?>						
										</li>

									<?php
										}
									?>
								</ul>
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
				</div>

			</div>
		</div>
	</section>
	<!-- //content-6-section -->
	<!--/team-sec-->
	
	<!--//team-sec-->
		<!-- grids -->
		
		<!-- //grids -->
<?php include 'footer.php' ?>