<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
</head>
    <?php $this->load->view('panel/partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
        <?php $this->load->view('panel/partials/sidebar') ?>
        <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Create New Card</h4>
                                    <div id="basic-example">
                                        <!-- Seller Details -->
                                        <h3>Customer Details</h3>
                                        <section>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Select Customer</label>
                                                            <select class="form-select form-control" name="gender" id="basicpill-firstname-input" >
                                                                <option selected="">Select Customer Name</option>
                                                                <option value="Male">Rahul</option>
                                                                <option value="Female">Naveen</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-lastname-input">Select Business Category</label>
                                                            <select class="form-select form-control" name="gender" id="basicpill-lastname-input" >
                                                                <option selected="">Select Business Category</option>
                                                                <option value="Male">Rahul</option>
                                                                <option value="Female">Naveen</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Phone</label>
                                                            <input type="text" class="form-control" id="basicpill-phoneno-input" placeholder="Enter your Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-email-input">Email</label>
                                                            <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter your email address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input">Address</label>
                                                            <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </section>

                                        <!-- Company Document -->
                                        <h3>Template Preview</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-6 col-xl-3">

                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="<?=site_url('public/assets/images/small/img-1.jpg')?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title mt-0">Card title</h4>
                                                            <p class="card-text">Some quick example text to build on the card title and make
                                                                up the bulk of the card's content.</p>
                                                            <a href="<?=site_url('Cards/frame/design-one')?>" class="btn btn-primary waves-effect waves-light col-md-12">Use This</a>
                                                        </div>
                                                    </div>

                                                </div><!-- end col -->

                                                <div class="col-md-6 col-xl-3">

                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="<?=site_url('public/assets/images/small/img-1.jpg')?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title mt-0">Card title</h4>
                                                            <p class="card-text">Some quick example text to build on the card title and make
                                                                up the bulk of the card's content.</p>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light col-md-12">Use This</a>
                                                        </div>
                                                    </div>

                                                </div><!-- end col -->

                                                <div class="col-md-6 col-xl-3">

                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="<?=site_url('public/assets/images/small/img-1.jpg')?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title mt-0">Card title</h4>
                                                            <p class="card-text">Some quick example text to build on the card title and make
                                                                up the bulk of the card's content.</p>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light col-md-12">Use This</a>
                                                        </div>
                                                    </div>

                                                </div><!-- end col -->


                                                <div class="col-md-6 col-xl-3">

                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="<?=site_url('public/assets/images/small/img-1.jpg')?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title mt-0">Card title</h4>
                                                            <p class="card-text">Some quick example text to build on the card title and make
                                                                up the bulk of the card's content.</p>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light col-md-12">Use This</a>
                                                        </div>
                                                    </div>

                                                </div><!-- end col -->
                                            </div>
                                        </section>

                                        <!-- Bank Details -->
                                        <h3>Operation Details</h3>
                                        <section>
                                            <div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-namecard-input">Name on Card</label>
                                                                <input type="text" class="form-control" id="basicpill-namecard-input" placeholder="Enter your Name on Card">
                                                            </div>
                                                        </div><!-- end col-lg-6 -->

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label>Credit Card Type</label>
                                                                <select class="form-select">
                                                                    <option selected>Select Card Type</option>
                                                                    <option value="AE">American Express</option>
                                                                    <option value="VI">Visa</option>
                                                                    <option value="MC">MasterCard</option>
                                                                    <option value="DI">Discover</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-cardno-input">Credit Card Number</label>
                                                                <input type="text" class="form-control" id="basicpill-cardno-input" placeholder="Enter your Enter your Credit Card Number">
                                                            </div>
                                                        </div><!-- end col-lg-6 -->

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-card-verification-input">Card Verification Number</label>
                                                                <input type="text" class="form-control" id="basicpill-card-verification-input" placeholder="Enter your Card Verification Number">
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-expiration-input">Expiration Date</label>
                                                                <input type="text" class="form-control" id="basicpill-expiration-input" placeholder="Enter your Expiration Date">
                                                            </div>
                                                        </div><!-- end col-lg-6 -->

                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </section>

                                        <!-- Confirm Details -->
                                        <h3>Confirm Detail</h3>
                                        <section>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                        </div>
                                                        <div>
                                                            <h5>Confirm Detail</h5>
                                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </section>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            <!-- End Page-content -->
            <?php $this->load->view('panel/partials/footer') ?>
        </div>
        <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<?php $this->load->view('panel/partials/vendor-scripts') ?>
<!-- jquery step -->
<script src="<?php echo site_url('assets/admin/libs/jquery-steps/build/jquery.steps.min.js')?>"></script>
<!-- form wizard init -->
<script src="<?php echo site_url('assets/admin/js/pages/form-wizard.init.js')?>"></script>
<script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>
</body>

</html>