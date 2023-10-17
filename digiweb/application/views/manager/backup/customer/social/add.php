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
                        <div class="col-12">
                            <!-- Left sidebar -->
                            <div class="email-leftbar card">
                                <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
                                    Change Template
                                </button>
                                <div class="mail-list mt-4">
                                    <a href="<?php echo site_url('Customer/card/'.$this->uri->segment('3'))?>"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i>Preview</a>
                                    <a href="<?php echo site_url('Customer/info/'.$this->uri->segment('3'))?>"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i>Info</a>
                                    <a href="<?php echo site_url('Customer/team/'.$this->uri->segment('3'))?>"><i class="uil-users-alt font-size-16 align-middle me-2"></i>Team</a>
                                    <a href="<?php echo site_url('Customer/social/'.$this->uri->segment('3'))?>"  class="active"><i class="uil-facebook font-size-16 align-middle me-2"></i>Social Media</a>
                                    <a href="<?php echo site_url('Customer/product/'.$this->uri->segment('3'))?>"><i class="uil-box font-size-16 align-middle me-2"></i>Product</a>
                                    <a href="<?php echo site_url('Customer/service/'.$this->uri->segment('3'))?>"><i class="uil-store font-size-16 align-middle me-2"></i>Service</a>
                                    <a href="<?php echo site_url('Customer/catalogue/'.$this->uri->segment('3'))?>"><i class="uil-book font-size-16 align-middle me-2"></i>Catalogue</a>
                                    <a href="<?php echo site_url('Customer/gallery/'.$this->uri->segment('3'))?>"><i class="uil-images font-size-16 align-middle me-2"></i>Gallery</a>
                                    <a href="<?php echo site_url('Customer/payments/'.$this->uri->segment('3'))?>"><i class="uil-wallet font-size-16 align-middle me-2"></i>Payments</a>
                                </div>
                            </div>
                            <!-- End Left sidebar -->
                            <!-- Right Sidebar -->
                            <div class="email-rightbar mb-3">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="repeater custom-validation" action="<?=site_url('Customer/social')?>" method="POST">
                                                    <h4 class="card-title">Add New Social Channel <hr></h4>
                                                    <?php $data = $this->CustomerModel->getinfo($this->uri->segment('3'));?>
                                                    <div class="row">
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Code</label>
                                                            <input type="text" class="form-control" name="customerUID" id="customerUID"readonly value="<?php echo $data->customerUID; ?>" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" name="companyName" id="companyName" value="<?php echo $data->company_name; ?>" readonly />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Select Social Icon Pack</label>
                                                            <select class="form-select" name="iconpack" id="iconpack">
                                                                <option selected>Choose Icon Pack</option>
                                                                <option value="Default">Default</option>
                                                            </select>
                                                        </div>
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="row">
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-label">Select Social Channel Name</label>
                                                                    <select class="form-select form-control" name="social_channel_name[]" id="social_channel_name">
                                                                        <option selected="">Choose Social Media or Channel Name</option>
                                                                        <option value="Facebook">Facebook</option>
                                                                        <option value="Instagram">Instagram</option>
                                                                        <option value="Whatsapp">Whatsapp</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-label">Enter URL</label>
                                                                    <input type="text" class="form-control" required placeholder="Enter First Name" name="social_ur[]" id="social_url" />
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label>Choose Icon Visibility</label>
                                                                    <div class="row">
                                                                        <div class="btn-group" role="group">
                                                                            <select class="form-select form-control" name="social_visible[]" id="social_visible">
                                                                                <option selected="">Visible</option>
                                                                                <option value="Hide">Hide</option>
                                                                            </select>
                                                                            <button data-repeater-delete type="button" class="btn btn-outline-danger waves-effect waves-light"><i class="uil uil-trash-alt "></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                                            
                                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                                Cancel
                                                            </button>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1 ">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive mb-4">
                                                    <table class="table table-centered table-nowrap mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Company Name</th>
                                                                <th scope="col">Channel Name</th>
                                                                <th scope="col">Channel Status</th>
                                                                <th scope="col" style="width: 200px;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="<?=site_url('public/assets/images/users/avatar-2.jpg')?>" alt="" class="avatar-xs rounded-circle me-2">
                                                                    <a href="<?=site_url('Users/details')?>" class="text-body">Simon Ryles</a>
                                                                </td>
                                                                <td>Full Stack Developer</td>
                                                                <td>SimonRyles@minible.com</td>
                                                                <td>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0);" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <div>
                                                            <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="float-sm-end">
                                                            <ul class="pagination mb-sm-0">
                                                                <li class="page-item disabled">
                                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link">1</a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a href="#" class="page-link">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end Col-9 -->

                        </div>
                    </div><!-- End row -->
                    
                </div> 
            </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>
        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>
        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>
        <script src="<?php echo site_url('assets/admin/libs/jquery.repeater/jquery.repeater.min.js')?>"></script>
        <script src="<?php echo site_url('assets/admin/js/pages/form-repeater.int.js')?>"></script>

    </body>

</html>

