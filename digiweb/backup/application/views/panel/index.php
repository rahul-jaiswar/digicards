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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Welcome to Secret Santa Week<span class="float-end"><?php echo $this->session->userdata('firstname')."".$this->session->userdata('lastname') ?></span></h4>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <img src="<?php echo site_url('assets/admin/secret-santa.jpg')?>" style="height: auto;">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="custom-validation" action="#">
                                    <h4 class="card-title">Gifting To<hr></h4>
                                    <div class="row">
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" required placeholder="Type something" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input type="text" class="form-control" required placeholder="Type something" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Email Address</label>
                                            <input type="text" class="form-control" required placeholder="Type something" />
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Full Address</label>
                                            <div>
                                                <textarea required class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title">Add Greetings<hr></h4>
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Your Message</label>
                                            <div>
                                                <textarea required class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Reels Link</label>
                                            <input type="text" class="form-control" required placeholder="Type something" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Video Link</label>
                                            <input type="text" class="form-control" required placeholder="Type something" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Image Link</label>
                                            <input type="text" class="form-control" required placeholder="Type something" />
                                        </div>
                                    </div>
                                    <h4 class="card-title">Let's Plan Your Gift<hr></h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <img class="card-img img-fluid" src="<?php echo site_url('assets/admin/images/small/img-2.jpg')?>" alt="Card image">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Process on Call</h5>
                                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Process on Chat</h5>
                                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img class="card-img img-fluid" src="<?php echo site_url('assets/admin/images/small/img-2.jpg')?>" alt="Card image">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card bg-dark">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        
                                                        <div class="col-sm-8">
                                                            <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></p>
                                                            <div class="mt-4">
                                                                <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light"><i class="uil uil-calling"></i>  Let's have a talk</a>
                                                                <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light"><i class="uil uil-whatsapp"></i>  Share Your Product Link on Whatsapp</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="mt-4 mt-sm-0">
                                                                <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                    

                </div> <!-- container-fluid -->
				
            </div>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

		<?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

