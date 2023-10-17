<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
</head>
    <?php $this->load->view('panel/partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('admin/partials/sidebar') ?>
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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="custom-validation" action="<?php echo site_url('Customer/add')?>" method="POST">
                                    <h4 class="card-title">General Info <hr></h4>
                                    <div class="row">
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Lead Channel</label>
                                            <select class="form-select form-control" name="leadchannel" id="leadchannel" >
                                                <option selected="">Select Channel Name</option>
                                                <option value="Web Commerce">Web Commerce</option>
                                                <option value="Referral">Referral Program</option>
                                                <option value="Offline">Offline</option>
                                                <option value="Franchise">Franchise</option>
                                                <option value="Amazon">Amazon</option>
                                                <option value="Flipkart">Flipkart</option>
                                                <option value="Female">Flipkart</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Card Type</label>
                                            <select class="form-select form-control" name="cardCategory" id="cardCategory">
                                                <option selected="">Select Category Name</option>
                                                <option value="Individual">Individual</option>
                                                <option value="Brand">Brand</option>
                                                <option value="Professional">Professional</option>
                                                <option value="Corporate Business">Corporate Business</option>
                                                <option value="Institution">Institution</option>
                                                <option value="Freelancer">Freelancer</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Card Material</label>
                                            <select class="form-select" name="cardMaterial" id="cardMaterial">
                                                <option selected>Select Card Material</option>
                                                <option value="Plain PVC">Plain PVC</option>
                                                <option value="Premium PVC">Premium PVC</option>
                                                <option value="Plain Wooden">Plain Wooden</option>
                                                <option value="Metal Premium Card (Rose GOLD)">Metal Premium Card (Rose GOLD)</option>
                                                <option value="Metal Premium Card (GOLD)">Metal Premium Card (GOLD)</option>
                                                <option value="Metal Premium Card (Stainless Steel)">Metal Premium Card (Stainless Steel)</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" onclick="createusername()" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required placeholder="Create Username" name="username" id="username">
                                                <div class="input-group-text">@tap-savvy.com</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company Category</label>
                                            <select class="form-select" name="company_cat" id="company_cat">
                                                <option selected>Select Company Category</option>
                                                <option value="Companies Limited by Shares">Companies Limited by Shares</option>
                                                <option value="Companies Limited by Guarantee">Companies Limited by Guarantee</option>
                                                <option value="Unlimited Companies">Unlimited Companies</option>
                                                <option value="One Person Companies (OPC)">One Person Companies (OPC)</option>
                                                <option value="Private Companies">Private Companies</option>
                                                <option value="Public Companies">Public Companies</option>
                                                <option value="Holding and Subsidiary Companies">Holding and Subsidiary Companies</option>
                                                <option value="Associate Companies">Associate Companies</option>
                                                <option value="Companies in terms of Access to Capital">Companies in terms of Access to Capital</option>
                                                <option value="Government Companies">Government Companies</option>
                                                <option value="Foreign Companies">Foreign Companies</option>
                                                <option value="Charitable Companies">Charitable Companies</option>
                                                <option value="Dormant Companies">Dormant Companies</option>
                                                <option value="Nidhi Companies">Nidhi Companies</option>
                                                <option value="Public Financial Institutions">Public Financial Institutions</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" required placeholder="Enter Company Name" name="company_name" id="company_name" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company URL</label>
                                            <input type="text" class="form-control" required placeholder="Enter Company Code" name="company_code" id="company_code"/>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" required placeholder="Enter Email Address" name="email" id="email" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input type="text" class="form-control" required placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" required placeholder="Create Password" name="password" id="password" value=""/>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>
        <script type="text/javascript">
            $(document).ready(function () { 
            });
            createusername = function() {
                var first = document.getElementById("firstname").value;
                var second = document.getElementById("lastname").value;
                document.getElementById("username").innerHTML = first+"."+second;
            }
        </script>
    </body>

</html>

