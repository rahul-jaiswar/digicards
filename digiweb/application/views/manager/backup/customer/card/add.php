<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
</head>
    <?php $this->load->view('panel/partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('manager/partials/menu') ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
	                    <div class="row">
		                    <div class="col-12">
		                        <!-- Left sidebar -->
		                        <div class="email-leftbar card">
									<button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
									    Change Template
									</button>
									<div class="mail-list mt-4">
										<a href="#" class="active"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i>Preview</a>
									    <a href="<?php echo site_url('Customer/info/'.$this->uri->segment('3'))?>"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i>Info</a>
									    <a href="<?php echo site_url('Customer/team/'.$this->uri->segment('3'))?>"><i class="uil-users-alt font-size-16 align-middle me-2"></i>Team</a>
									    <a href="<?php echo site_url('Customer/social/'.$this->uri->segment('3'))?>"><i class="uil-facebook font-size-16 align-middle me-2"></i>Social Media</a>
									    <a href="<?php echo site_url('Customer/product/'.$this->uri->segment('3'))?>"><i class="uil-box font-size-16 align-middle me-2"></i>Product</a>
									    <a href="<?php echo site_url('Customer/service/'.$this->uri->segment('3'))?>"><i class="uil-store font-size-16 align-middle me-2"></i>Service</a>
									    <a href="<?php echo site_url('Customer/catalogue/'.$this->uri->segment('3'))?>"><i class="uil-book font-size-16 align-middle me-2"></i>Catalogue</a>
									    <a href="<?php echo site_url('Customer/gallery/'.$this->uri->segment('3'))?>"><i class="uil-images font-size-16 align-middle me-2"></i>Gallery</a>
									    <a href="<?php echo site_url('Customer/payments/'.$this->uri->segment('3'))?>"><i class="uil-wallet font-size-16 align-middle me-2"></i>Payments</a>
									</div>
									<h6 class="mt-4">Template Components</h6>
									<div class="mail-list mt-1">
									    <a href="#"><span class="mdi mdi-circle-outline text-info float-end"></span>Bottom Bar</a>
									    <a href="#"><span class="mdi mdi-circle-outline text-warning float-end"></span>Background</a>
									    <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>QR Code</a>
									    <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>URL Preview</a>
									    <a href="#"><span class="mdi mdi-circle-outline text-success float-end"></span>Family</a>
									</div>
								</div>
		                        <!-- End Left sidebar -->
		                        <!-- Right Sidebar -->
		                        <div class="email-rightbar mb-3">
		                        	<div class="row">
					                    <div class="col-xl-6">
					                        <div class="card">
					                            <div class="card-body">
					                                <div class="d-flex align-items-start">
					                                    <div class="ms-3 me-4">
					                                        <h1 class="display-4 mb-0">01</h1>
					                                    </div>
					                                    <div class="flex-grow-1 align-self-center">
					                                        <p class="mb-2">Template Name</p>
					                                        <h5 class="mb-0">Mobile eCommerce HTML Template (Layout One)</h5>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                        <div class="card">
					                        	<div class="card-body">
					                                <div class="d-flex align-items-start">
					                                    <div class="ms-3 me-4">	
					                                        <img src="https://htmldemo.net/rick/p2/img/rick.png" alt="qr code">
					                                    </div>
					                                    <div class="flex-grow-1 align-self-center">
					                                        <h4 class="mb-2">Sharing URL</h4>
					                                        <h5 class="mb-0">
					                                        	<?php foreach($url as $urllink):?>
					                                        	<a href="<?php echo site_url('/').''.$urllink; ?>">
					                                        		<span class="badge bg-primary"><?php echo site_url('/').''.$urllink;?></span>
					                                        	</a>
					                                        	<?php endforeach;?>
					                                    	</h5>
					                                        <h4 class="mt-2">Check Meta Tags of Social Media</h4>
					                                        <div class="btn-group" role="group" aria-label="Basic example">
	                                                        <a class="btn btn-outline-secondary"><i class="bx bxl-facebook-circle"></i></a>
	                                                        <button type="button" class="btn btn-outline-secondary"><i class="bx bxl-instagram-alt"></i></button>
	                                                        <button type="button" class="btn btn-outline-secondary"><i class="bx bxl-whatsapp-square"></i></button>
	                                                    </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                        <div class="card">
					                            <div class="card-body">
					                                <div class="d-flex align-items-start">
					                                    <div class="flex-grow-1 align-self-center">
					                                        <p class="mb-2">Font Family</p>
					                                        <h5 class="mb-0">"IBM Plex Sans", sans-serif</h5>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="col-xl-6">
					                    	
					                    </div>
					                </div>
		                        </div> <!-- end Col-9 -->
		                    </div>
		                </div><!-- End row -->
		            </div>
                </div> <!-- container-fluid -->
            </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

