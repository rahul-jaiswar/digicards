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
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="custom-validation" action="<?=site_url('Customer/team',$this->uri->segment('3'))?>" method="POST">
                                                    <h4 class="card-title">General Info <hr></h4>
                                                    <?php $data = $this->CustomerModel->getinfo($this->uri->segment('3'))?>
                                                    <div class="row">
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Code</label>
                                                            <input type="text" class="form-control" name="customerUID" id="customerUID" value="<?php echo $data->customerUID; ?>" readonly />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo $data->company_name?>" readonly />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Category</label>

                                                            <select class="form-select form-control" name="gender" id="basicpill-firstname-input">
                                                                <?php if($data->company_cat){?>
                                                                <option selected="" value="<?php echo $data->company_cat ?>"><?php echo $data->company_cat ?></option>
                                                                <?php }?>
                                                                <option>Enter or Company Category</option>
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
                                                                <option value="Foreign Companies">Freign Companies</option>
                                                                <option value="Charitable Companies">Charitable Companies</option>
                                                                <option value="Dormant Companies">Dormant Companies</option>
                                                                <option value="Nidhi Companies">Nidhi Companies</option>
                                                                <option value="Public Financial Institutions">Public Financial Institutions</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Est Date</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company PAN NO</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company STN NO</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company GST NO</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Trademark</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Upload Company Logo</label>
                                                            <input type="file" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Email</label>
                                                            <input type="email" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Support Email</label>
                                                            <input type="email" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Support Contact</label>
                                                            <input type="number" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Whastapp Business</label>
                                                            <input type="number" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Website URL</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Company Map Link</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Intro Video URL</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Upload Company Profile PDF</label>
                                                            <input type="file" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-4 mb-3">
                                                            <label class="form-label">Upload Company Catalogue PDF</label>
                                                            <input type="file" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12 mb-3">
                                                            <label class="form-label">About the Company</label>
                                                            <textarea class="form-control" placeholder="Write about Company...."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-3 mb-3">
                                                            <label class="form-label">Country</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-3 mb-3">
                                                            <label class="form-label">State</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-3 mb-3">
                                                            <label class="form-label">City</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-3 mb-3">
                                                            <label class="form-label">Pincode</label>
                                                            <input type="text" class="form-control" required placeholder="" name="firstname" id="firstname" />
                                                        </div>
                                                        <div class="col-xl-12 mb-3">
                                                            <label class="form-label">Company Address</label>
                                                            <textarea class="form-control" placeholder="Enter Full Address"></textarea>
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
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive mb-4">
                                                    <table class="table table-centered table-nowrap mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Position</th>
                                                                <th scope="col">Email</th>
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
                            </div>
                        </div><!-- End row -->
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

