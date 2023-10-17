<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/colorpicker') ?>
</head>
<?= $this->include('partials/body') ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Update Template</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                	<div class="col-xl-8">
                                        <div class="mt-4 mt-xl-3 ps-xl-4">
                                        	<h4 class="font-size-20 mb-3"><?php echo $template['temp_name']; ?></h4>
                                            <h5 class="font-size-14"><a href="#" class="text-muted"><?php echo $template['temp_cat']; ?></a></h5>
                                            <div class="text-muted">
                                                <span class="badge bg-success font-size-14 me-1">Subscription Category Standard Template</span>
                                            </div>
                                            <form class="custom-validation" action="<?= site_url('Customer/add')?>" method="POST">
			                                    <h4 class="card-title mt-2">Update Template Design<hr></h4>
			                                    <div class="row">
			                                        <div class="col-xl-6 mb-3">
			                                            <label class="form-label">Upload Background Image</label>
			                                            <input type="file" class="form-control" name="background_image" id="background_image"/>
			                                        </div>
			                                        <div class="col-xl-6 mb-3">
			                                            <label class="form-label">Choose Background Color</label>
                                                		<input type="text" class="form-control" id="colorpicker-default" value="#50a5f1">
			                                        </div>
			                                        <div class="col-xl-6 mb-3">
			                                            <label class="form-label">Upload Page Loader</label>
			                                            <input type="file" class="form-control" name="background_image" id="background_image"/>
			                                        </div>
			                                        <div class="col-xl-6 mb-3">
			                                            <label class="form-label">Choose Button Color</label>
                                                		<input type="text" class="form-control" id="colorpicker-default" value="#50a5f1">
			                                        </div>
			                                        <div class="col-xl-6 mb-3">
			                                            <label class="form-label">Select Icon Pack</label>
			                                            <select class="form-select form-control" name="card_category" id="card_category" required>
			                                                <option selected="">Select Pack Name</option>
			                                                <option value="Individual">Individual</option>
			                                                <option value="Brand">Brand</option>
			                                                <option value="Professional">Professional</option>
			                                                <option value="Corporate Business">Corporate Business</option>
			                                                <option value="Institution">Institution</option>
			                                                <option value="Freelancer">Freelancer</option>
			                                            </select>
			                                        </div>
			                                        <div class="col-xl-6 mb-3">
			                                            <label class="form-label">Select Contact Style</label>
			                                            <select class="form-select form-control" name="card_category" id="card_category" required>
			                                                <option selected="">Select Pack Name</option>
			                                                <option value="Individual">Individual</option>
			                                                <option value="Brand">Brand</option>
			                                                <option value="Professional">Professional</option>
			                                                <option value="Corporate Business">Corporate Business</option>
			                                                <option value="Institution">Institution</option>
			                                                <option value="Freelancer">Freelancer</option>
			                                            </select>
			                                        </div>
			                                    </div>
			                                    <div>
			                                        <div>
			                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
			                                                Save Design
			                                            </button>
			                                            <button type="reset" class="btn btn-secondary waves-effect">
			                                                Cancel
			                                            </button>
			                                        </div>
			                                    </div>
			                                </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="product-detail">
                                            <div class="row">
                                                <div class="col-12">
	                                                <div class="product-img">
	                                                    <img src="http://www.digibcards.com/laravel/public/front/img/full-width-feature-01.png" alt="" class="img-fluid mx-auto d-block">
	                                                </div>
                                                </div>
                                            </div>
                                            <div class="row text-center mt-2">
                                                <div class="col-sm-6 d-grid">
                                                    <a href="<?=site_url('Template/preview/'.$template['temp_name'])?>" class="btn btn-primary btn-block waves-effect waves-light mt-2 me-1" target="_blank"><i class="uil uil-eye me-2"></i> Preview
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 d-grid">
                                                    <button type="button" class="btn btn-light btn-block waves-effect  mt-2 waves-light">
                                                        <i class="uil uil-card me-2"></i>Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Minible.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
        </footer>    

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/colorpicker') ?>
<?= $this->include('partials/js/advanceform') ?>

<?= $this->include('partials/js/main') ?>
</body>

</html>