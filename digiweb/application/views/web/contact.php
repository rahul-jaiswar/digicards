<?php $this->load->view('default/header');?>
   <body>
      <?php $this->load->view('default/nav-black');?>
		<!--End Header -->
		<!--Breadcrumb Area-->
		<section class="breadcrumb-area " data-background="images/banner/9.jpg">
			<div class="text-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 v-center">
							<div class="bread-inner">
								<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
									<h2>Contact</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Breadcrumb Area-->
		<!--Start Enquire Form-->
		<section class="contact-page pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 v-center">
						<div class="common-heading text-l">
							<span>Contact Now</span>
							<h2 class="mt0 mb0">Have Question? Write a Message</h2>
							<p class="mb60 mt20">We will catch you as early as we receive the message</p>
						</div>
						<div class="form-block">
							<form id="contactForm" data-bs-toggle="validator" class="shake">
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text"  id="name" placeholder="Enter name" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<input type="email"  id="email" placeholder="Enter email" required>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<select name="Dtype" id="Dtype" required>
											<option value="">Select Requirement</option>
											<option value="web">Cards</option>
											<option value="graphic">Frachise</option>
											<option value="video">Having Question</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group">
									<textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</form>
									</div>
								</div>
								<div class="col-lg-5 v-center">
									<div class="contact-details">
										<div class="contact-card wow fadeIn" data-wow-delay=".2s">
											<div class="info-card v-center">
												<span><i class="fas fa-phone-alt"></i> Phone:</span>
												<div class="info-body">
													<p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
													<a href="tel:+91">(+91) 9321768154</a>
												</div>
											</div>
										</div>
										<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
											<div class="info-card v-center">
												<span><i class="fas fa-envelope"></i> Email:</span>
												<div class="info-body">
													<p>Our support team will get back to in 24-h during standard business hours.</p>
													<a href="mailto:info@tap-savvy.com">info@tap-savvy.com</a>
												</div>
											</div>
										</div>
										<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
											<div class="info-card v-center">
												<span><i class="fab fa-skype"></i> Skype:</span>
												<div class="info-body">
													<p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
													<a href="skype:niwax.company?call">Tap Savvy</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End Enquire Form-->
					
					<!--Start Footer-->
					<?php $this->load->view('default/footer.php');?>
					<!--End Footer-->
					<?php $this->load->view('default/off-canvas.php');?>
      <?php $this->load->view('default/contact-script.php');?>

