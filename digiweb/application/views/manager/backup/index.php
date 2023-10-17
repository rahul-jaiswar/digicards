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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Welcome to Our Founder<span class="float-end"><?php echo $this->session->userdata('firstname')."".$this->session->userdata('lastname') ?></span></h4>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="addproduct-accordion" class="custom-accordion">
                            <form method="POST" class="custom-validation" action="<?php echo site_url('Manager/add')?>">
                                <div class="card">
                                    <a href="#user-registeration" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
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
                                                    <h5 class="font-size-16 mb-1">Register User</h5>
                                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="user-registeration" class="collapse show" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label">Email ID</label>
                                                    <input type="text" class="form-control" name="email_id" id="email_id" required placeholder="Enter Email ID" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mobile No</label>
                                                        <input type="number" class="form-control" name="mobile_no" id="mobile_no" required placeholder="Enter Mobile No" pattern="[789][0-9]{9}" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#general-info" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
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
                                                    <h5 class="font-size-16 mb-1">General Infomation</h5>
                                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                    <div id="general-info" class="collapse" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label">Company Logo</label>
                                                    <input type="file" class="form-control" name="company_logo" id="company_logo" required />
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control" name="firstname" id="firstname" required placeholder="Enter First Name" pattern="[789][0-9]{9}" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Position/Designation</label>
                                                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Position or Designation" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Phone No</label>
                                                        <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone Number" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Alternate No</label>
                                                        <input type="number" class="form-control" name="alt_no" id="alt_no" placeholder="Enter Alternate No" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Whatsapp No</label>
                                                        <input type="number" class="form-control" name="wa_no" id="wa_no" placeholder="Enter Whatsapp Number" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email ID</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Website (Optional)</label>
                                                        <input type="text" class="form-control" name="web_link" id="web_link" placeholder="Enter Website Address" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Location</label>
                                                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter Location" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Upload Company Profile PDF</label>
                                                        <input type="file" class="form-control" name="company_profile" id="company_profile" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Upload Portfolio PDF</label>
                                                        <input type="file" class="form-control" name="portfolio" id="portfolio" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label class="form-label">Full Address</label>
                                                <textarea required class="form-control" rows="5" placeholder="Enter Full Address" name="address" id="address"></textarea>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label class="form-label">About Us</label>
                                                <textarea required class="form-control" rows="5" placeholder="Enter About " name="about" id="about"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#social-links" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
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
                                                    <h5 class="font-size-16 mb-1">Social Links</h5>
                                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="social-links" class="collapse" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <img src="asda" style="width:12px;height:100%;background-color:red ;">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">URL Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                        <label class="form-label" for="metatitle">Social Logo Upload</label>
                                                        <input  type="file" id="social_logo" name="social_logo" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label">Youtube Videos List (Seprated by Comma)</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5" name="about_us" id="about_us" placeholder="Enter Your Secret Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#payments-link" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                                        <div class="p-4">

                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            04
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Payments Links</h5>
                                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                    <div id="payments-link" class="collapse" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Payment Platform Logo</label>
                                                        <input id="file" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">UPI Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Bank Name</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Account Holder Name</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Bank Account Name</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Bank IFSC Code</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">GST</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label">Youtube Videos List (Seprated by Comma)</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5" name="about_us" id="about_us" placeholder="Enter Your Secret Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#payments-link" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            04
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Payments Links</h5>
                                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="payments-link" class="collapse" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Facebook Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Twitter Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Instagram Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Linked In Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Youtube Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Google Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Telegram Link</label>
                                                        <input id="intro_video" name="intro_video" type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label">Youtube Videos List (Seprated by Comma)</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5" name="about_us" id="about_us" placeholder="Enter Your Secret Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#addproduct" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            05
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">Add Products</h5>
                                                    <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                    <div id="addproduct" class="collapse" data-bs-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">I am Planning to be Secret Santa (Drop your Number)</label>
                                                        <input id="sup_contact_no" name="sup_contact_no" type="text" class="form-control" placeholder="Enter Your Mobile Number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metakeywords">I want to be Secret Santa (Drop your Number)</label>
                                                        <input id="whatsapp_business" name="whatsapp_business" type="text" class="form-control" placeholder="Enter Your Mobile Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Links</label>
                                                        <textarea required class="form-control" rows="5" name="map_link" id="map_link" placeholder="Add Amazon,Flipkart and Other Ecommerce Website Product Link rest we take for you!"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Your Message</label>
                                                        <textarea required class="form-control" rows="5" name="cprofile_pdf" id="cprofile_pdf" placeholder="Please Drop if you have any question"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card bg-dark">
                                                        <div class="card-body">
                                                            <div class="row align-items-center">
                                                                
                                                                <div class="col-sm-8">
                                                                    <p class="text-white font-size-18">Let's the<b> GAME </b>Begin <i class="mdi mdi-arrow-right"></i></p>
                                                                    <div class="mt-4">
                                                                        <a href="tel:+91 9321768154" class="btn btn-success waves-effect waves-light"><i class="uil uil-calling"></i>  Let's have a talk</a>
                                                                        <a href="https://wa.me/+919321768154?text=I'm%20interested%20in%20your%20secretsanta%20product%20let's%20have%20%20a%20talk" class="btn btn-success waves-effect waves-light"><i class="uil uil-whatsapp"></i>  Share Your Product Link on Whatsapp</a>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col ms-auto">
                                        <div class="d-flex flex-reverse flex-wrap gap-2">
                                            <button type="reset" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </button>
                                            <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt"></i> Register </button>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </form>
                            </div>
                        </div>
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

