<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
</head>
<?= $this->include('partials/body') ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row mt-2 mb-2 me-2">
                                <div class="col-xl-2"> 
                                    
                                </div>
                                <div class="col-xl-10"> 
                                    <h4 class="card-title mt-2 mb-2">
                                        <div class="page-title-right float-end">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);"><a href="<?= site_url('Agent/list')?>">Agent List</a></li>
                                                <li class="breadcrumb-item active">Add Agent</li>
                                            </ol>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <?= \Config\Services::validation()->listErrors();
                                $message = \Config\Services::session()->getFlashdata('msg');
                                //echo"<pre>";print_r(isset($message));exit();?>
                                <?php if (isset($message)) : ?>
                                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                    <?= \Config\Services::session()->getFlashdata('msg'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                                <?php endif; ?>
                                <form class="custom-validation" action="<?=site_url('Users/add')?>" method="POST">
                                    <?= csrf_field(); ?>
                                    <h4 class="card-title">General Info <hr></h4>
                                    <div class="row">
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">User Type</label>
                                            <select class="form-select" name="userType" id="userType">
                                                <option selected>Select Access Category</option>
                                                <option value="CPU">CPU Branch</option>
                                                <option value="Customer">Customer Management</option>
                                                <option value="Transaction">Transaction Management</option>
                                                <option value="Branch">Branch Management</option>
                                                <option value="Audit">Audit Management</option>
                                                <option value="Operation">Operation Management</option>
                                                <option value="Support">Support Management</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Role Category</label>
                                            <select class="form-select" name="userRole" id="userRole">
                                                <option selected>Select Role Category</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Assistant">Assistant</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">User Code</label>
                                            <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo "SN".(rand(0,10000));?>" readonly />
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
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" required placeholder="Enter Date of Birth" name="user_dob" id="user_dob" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Gender</label>
                                            <select class="form-select" name="gender" id="gender">
                                                <option selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required placeholder="Create Username" name="username" id="username">
                                                <div class="input-group-text">@supermacysavingnidhilimited.com</div>
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
                                            <input type="password" class="form-control" required placeholder="Create Password" name="password" id="password" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Verification Status</label>
                                            <select class="form-select" name="email_status" id="email_status" disabled>
                                                <option value="UnVerified">UnVerified</option>
                                                <option value="Verified">Verified</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Full Address</label>
                                            <div>
                                                <textarea required class="form-control" rows="5" name="address" id="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control"  placeholder="Enter Postal Code" name="pincode" id="pincode" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" placeholder="Enter State Name" name="state" id="state" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control"  placeholder="Enter City Name" name="city" id="city" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Register User
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
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/default/table-edit') ?>
<?= $this->include('partials/default/main') ?>
</body>

</html>