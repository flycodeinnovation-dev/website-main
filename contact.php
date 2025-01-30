<?php
	$title = "Contact Page";
	include ('./includes/header.php');
?>

	<section class="w3l-inner-page-main">
	  <div class="breadcrumb-infhny">
		<div class="container">
		  <nav aria-label="breadcrumb">
			<h2 class="hny-title text-center">Contact</h2>
			<ol class="breadcrumb mb-0">
			  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
			  <li class="breadcrumb-item active" aria-current="page">Contact</li>
			</ol>
		  </nav>
		</div>
	  </div>
	</section>
 

	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container">
				<div class="contact-grids row py-lg-5">
					<div class="contact-left col-lg-6">
							<img src="./assets/images/contact-sec.jpg" alt="contact-sec.jpg" class="img-fluid">
					</div>
					<div class="contact-right col-lg-6 pl-lg-4">
							<h3>Contact</h3>
						<h4>Everything Start With A Hello!</h4>
						<p>We’re here to answer any questions you may have and create an effective solution for your instructional needs.</p>
						<form action="" method="post" class="signin-form mt-lg-5 mt-4">
							<div class="input-grids">
								<input type="text" name="w3lName" placeholder="Full name" class="contact-input" />
								<input type="email" name="w3lSender" placeholder="Your email" class="contact-input" />
								<input type="text" name="w3lSubect" placeholder="Subject" class="contact-input" />
								<input type="number" name="w3lPhone" placeholder="Phone number" class="contact-input" />
							</div>
							<div  class="form-input">
								<textarea name="w3lMessage" placeholder="Type your message here" required=""></textarea>
							</div>
							<div  class="form-input mb-5">
								<label class="container"><p>Send me a copy <a href="#">privacy policy.</a></p>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
								</div>
							<button class="btn submit">Send Message</button>
						</form>
					</div>

				</div>
			</div>
		</div>
		<!--<div class="map-hny">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin" style="border:0" allowfullscreen=""></iframe>
	   </div>-->
	</section>
	<!-- //contact-form -->


<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container">
				<div class="contact-grids row py-lg-5">
					<div class="contact-gridhny col-lg-4">
						<div class="con-gridhny-inf">
							<h6>Bisiness</h6>
							<p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>
							<a href="mailto:handler1@example.com" class="link1 btn">handler1@example.com</a>
						</div>
					</div>
					<div class="contact-gridhny col-lg-4 my-lg-0 my-4">
						<div class="con-gridhny-inf">
							<h6>Press</h6>
							<p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>
							<a href="mailto:handler1@example.com" class="link1 btn">handler2@example.com</a>
						</div>
					</div>
					<div class="contact-gridhny col-lg-4">
						<div class="con-gridhny-inf">
							<h6>Career</h6>
							<p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>
							<a href="mailto:handler1@example.com" class="link1 btn">handler3@example.com</a>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- //contact-form -->

<?php
	include ('./includes/footer.php');
?>