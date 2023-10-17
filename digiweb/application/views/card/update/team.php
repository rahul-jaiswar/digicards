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
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="custom-validation" action="<?=site_url('Customer/team',$this->uri->segment('3'))?>" method="POST">
                                                <h4 class="card-title">Team Info <hr></h4>
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
                                                        <label class="form-label">Enter Team Name</label>
                                                        <select class="form-select form-control" name="gender" id="basicpill-firstname-input">
                                                            <option selected="">Enter or Select Team Name</option>
                                                            <option value="Referral">Operations</option>
                                                            <option value="Referral">Markeing</option>
                                                            <option value="Referral">Tech</option>
                                                            <option value="Referral">Sales</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Enter Person Designation</label>
                                                        <select class="form-select form-control" name="gender" id="basicpill-firstname-input">
                                                            <option selected="">Select Designation</option>
                                                            <optgroup label="Top Management">
                                                            <option value="Referral">Chairperson</option>
                                                            <option value="Referral">President</option>
                                                            <option value="Referral">CEO</option>
                                                            <option value="Referral">Executive Director</option>
                                                            <option value="Referral">Managing Director</option>
                                                            <option value="Referral">Chief Operating Officer </option>
                                                            <option value="Referral">Chief Finance Officer</option>
                                                            <option value="Referral">Vice President</option>
                                                            </optgroup>
                                                            <optgroup label="Middle Management">
                                                            <option value="Referral">General Manager</option>
                                                            <option value="Referral">Area Manager</option>
                                                            <option value="Web Commerce">Director</option>
                                                            <option value="Web Commerce">Branch Manager</option>
                                                            <option value="Web Commerce">Senior Manager</option>
                                                            </optgroup>
                                                            <optgroup label="Lower Management">
                                                            <option value="Referral">Supervisor</option>
                                                            <option value="Referral">Manager</option>
                                                            <option value="Referral">Assistant Manager</option>
                                                            <option value="VP">Section Head</option>
                                                            <option value="Manager">Team Lead</option>
                                                            <option value="Executive">Executive</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Card Material</label>
                                                        <select class="form-select" name="userType" id="userType">
                                                            <option selected>Select Card Material</option>
                                                            <option value="1">Plain PVC</option>
                                                            <option value="3">Premium PVC</option>
                                                            <option value="4">Plain Wooden</option>
                                                            <option value="4">Metal Premium Card (Rose GOLD)</option>
                                                            <option value="4">Metal Premium Card (GOLD)</option>
                                                            <option value="4">Metal Premium Card (Stainless Steel)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">User Code</label>
                                                        <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo "TAPT".(rand(0,10000));?>" readonly />
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
                                                        
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Username</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" required placeholder="Create Username" name="username" id="username">
                                                            <div class="input-group-text">@tap-savvy.com</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control" required placeholder="Enter Email Address" name="email" id="email" />
                                                        <span class="text-danger"><?= isset($validation) ? display_error($validation,'emailaddress') : '' ?></span>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Mobile No</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" />
                                                        <span class="text-danger"><?= isset($validation) ? display_error($validation,'mobileno') : '' ?></span>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" required placeholder="Create Password" name="password" id="password" value=""/>
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Upload Profile Image</label>
                                                        <input type="file" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Whatsapp Mobile No</label>
                                                        <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
                                                    </div>
                                                    <div class="col-xl-4 mb-3">
                                                        <label class="form-label">Alternate No</label>
                                                        <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
                                                    </div>
                                                    <div class="col-xl-12 mb-3">
                                                        <label class="form-label">About Member</label>
                                                        <textarea class="form-control" rows="2"></textarea>
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
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

