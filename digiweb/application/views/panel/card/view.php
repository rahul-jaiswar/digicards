<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
</head>
    <?php $this->load->view('panel/partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('panel/partials/menu') ?>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="page-content">
                        <?php if ($this->session->flashdata('success')): ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <?php $this->session->unset_userdata ( 'success' ); ?>
                          </div>
                          <?php elseif ($this->session->flashdata('error')): ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          <?php $this->session->unset_userdata ( 'error' ); ?>
                        <?php endif; ?>
                        <?php if($details):?>
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
		                                        	<a href="<?php echo site_url('/'.$company->company_url); ?>" target="_blank">
		                                        		<span class="badge bg-primary"><?php echo site_url('/'.$company->company_url);?></span>
		                                        	</a>
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
		                    	<iframe src="<?php echo site_url('Customer/index')?>" style="width: 100%;height: 880px;"></iframe>
		                    </div>
		                </div>
		            	<?php endif;?>
                    </div>
                </div> 
            </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

