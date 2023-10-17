<?php $this->load->view('default/header');?>
   <body>
      <!--Start 404 Error-->
		<section class="error bg-gradient pad-tb">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="layer-div">
							<div class="error-block">
							<h1>Card not Found</h1>
							<p>Please Contact Our Support Team.</p>
							<div class="images mt20">
							<img src="<?php echo site_url('assets/web/images/shape/error-page.png')?>" alt="error page" class="img-fluid"/>
							</div>
							<a href="/" class="btn-outline">Back to Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End 404 Error-->
<?php $this->load->view('default/script.php');?>