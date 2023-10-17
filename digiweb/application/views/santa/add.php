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
                        <div id="addproduct-accordion" class="custom-accordion">
                            <div class="card">
                                <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                                    <div class="p-4">

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        01
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Billing Info</h5>
                                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>

                                    </div>
                                </a>

                                <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label" for="productname">Product Name</label>
                                                <input id="productname" name="productname" type="text" class="form-control" placeholder="Enter your Product Name">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturername">Manufacturer Name</label>
                                                        <input id="manufacturername" name="manufacturername" type="text" class="form-control" placeholder="Enter your Manufacturer Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturerbrand">Manufacturer Brand</label>
                                                        <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control" placeholder="Enter your Manufacturer Brand">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="price">Price</label>
                                                        <input id="price" name="price" type="text" class="form-control" placeholder="Enter your Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" class="control-label">Category</label>
                                                        <select class="form-control select2">
                                                            <option>Select</option>
                                                            <option value="EL">Electronic</option>
                                                            <option value="FA">Fashion</option>
                                                            <option value="FI">Fitness</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" class="control-label">Specifications</label>

                                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                            <option value="HI" selected>High Quality</option>
                                                            <option value="LE" selected>Leather</option>
                                                            <option value="NO">Notifications</option>
                                                            <option value="SI">Sizes</option>
                                                            <option value="DI">Different Color</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label" for="productdesc">Product Description</label>
                                                <textarea class="form-control" id="productdesc" rows="4" placeholder="Enter your Product Description"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
                                    <div class="p-4">

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        02
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Product Image</h5>
                                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>

                                    </div>
                                </a>

                                <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                                </div>

                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <a href="#addproduct-metadata-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                                    <div class="p-4">

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        03
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Meta Data</h5>
                                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>

                                    </div>
                                </a>

                                <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Meta title</label>
                                                        <input id="metatitle" name="metatitle" type="text" class="form-control" placeholder="Enter your Meta title">
                                                    </div>

                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metakeywords">Meta Keywords</label>
                                                        <input id="metakeywords" name="metakeywords" type="text" class="form-control" placeholder="Enter your Meta Keywords">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label" for="metadescription">Meta Description</label>
                                                <textarea class="form-control" id="metadescription" rows="4" placeholder="Enter your Meta Description"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-4">
                    <div class="col ms-auto">
                        <div class="d-flex flex-reverse flex-wrap gap-2">
                            <a href="#" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                            <a href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
                <div class="row">
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
            <!-- End Page-content -->
        </div>
    </div>
        <!-- end main content-->
<!-- END layout-wrapper -->
<?php $this->load->view('panel/partials/vendor-scripts') ?>
<!-- jquery step -->
<script src="<?php echo site_url('assets/admin/libs/jquery-steps/build/jquery.steps.min.js')?>"></script>
<!-- form wizard init -->
<script src="<?php echo site_url('assets/admin/js/pages/form-wizard.init.js')?>"></script>
<script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>
</body>

</html>