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
                                        <h4 class="card-title">Upload Gallery <hr></h4>
                                        <div class="row">
                                            <div class="col-xl-3 mb-3">
                                                <label class="form-label">Company Code</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID"readonly />
                                            </div>
                                            <div class="col-xl-3 mb-3">
                                                <label class="form-label">Company Name</label>
                                                <input type="text" class="form-control" name="userUID" id="userUID" readonly />
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-label">Upload Gallery Images</label>
                                                <input type="file" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
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
                                                    <th scope="col">Total Image</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col" style="width: 200px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="<?=site_url('public/assets/images/users/avatar-2.jpg')?>" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="<?=site_url('Users/details')?>" class="text-body">Simon Ryles</a>
                                                    </td>
                                                    <td>20</td>
                                                    <td>22-02-2023</td>
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

