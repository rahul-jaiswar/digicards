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
                                    <form class="repeater custom-validation" action="<?=site_url('Customer/team',$this->uri->segment('3'))?>" method="POST" enctype="multipart/form-data">
                                        <h4 class="card-title">Add Payments Product <hr></h4>
                                        <div class="row">
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-label">Company Code</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID"readonly />
                                            </div>
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-label">Company Name</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID" readonly />
                                            </div>
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-label">Bank Name</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID" />
                                            </div>
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-label">Account Holder Name</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID" />
                                            </div>
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-label">Bank Account Number</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID" />
                                            </div>
                                            <div class="col-xl-4 mb-3">
                                                <label class="form-label">Bank IFSC Code</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID" />
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">
                                                    <div class="col-xl-3 mb-3">
                                                        <label class="form-label">Select Payment Channel</label>
                                                        <select class="form-select form-control">
                                                            <option selected="">UPI Payment Channel</option>
                                                            <option value="Referral">Google Pay</option>
                                                            <option value="Referral">Phone Pe</option>
                                                            <option value="Referral">Paytm</option>
                                                            <option value="Referral">Bahart Pay</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-3 mb-3">
                                                        <label class="form-label">Enter Registered Number</label>
                                                        <input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
                                                    </div>
                                                    <div class="col-xl-3 mb-3">
                                                        <label class="form-label">Enter UPI ID or URL</label>
                                                        <input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Upload UPI QR</label>
                                                        <div class="row">
                                                            <div class="btn-group" role="group">
                                                                <input type="file" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
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
                                                    <th scope="col">QR</th>
                                                    <th scope="col">Channel Name</th>
                                                    <th scope="col">Registerd Number</th>
                                                    <th scope="col">Bank Details</th>
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
                </div> <!-- container-fluid -->
            </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

