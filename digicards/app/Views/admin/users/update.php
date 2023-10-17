<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title> Update User| SSNL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

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
                                <form class="custom-validation" action="<?=site_url('Users/update')?>" method="POST">
                                    <?= csrf_field(); ?>
                                    <h4 class="card-title">General Info <hr></h4>
                                    <div class="row">
                                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $userdata['users_id'];?>"> 
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">User Type</label>
                                            <select class="form-select" name="userType" id="userType">
                                                <option value="<?php echo $userdata['userType']?>"><?php echo $userdata['userType']?></option>
                                                <option value="">Select Access Category</option>
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
                                                <option value="<?php echo $userdata['userRole']?>"><?php echo $userdata['userRole']?></option>
                                                <option value="">Select Role Category</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Assistant">Assistant</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">User Code</label>
                                            <?php if($userdata['userUID']!=''){?>
                                                <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo $userdata['userUID'];?>" readonly />
                                            <?php }else{?>
                                                <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo "SN".(rand(0,10000));?>" readonly />
                                            <?php }?>
                                            
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">First Name</label>
                                            <?php if($userdata['firstname']!=''){?>
                                                <input type="text" class="form-control"  placeholder="Enter First Name" name="firstname" id="firstname" value="<?php echo $userdata['firstname']; ?>" />
                                            <?php }else{?>
                                                <input type="text" class="form-control"  placeholder="Enter First Name" name="firstname" id="firstname" />
                                            <?php }?>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <?php if($userdata['lastname']!=''){?>
                                                <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" value="<?php echo $userdata['lastname']?>" />
                                            <?php }else{?>
                                                <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
                                            <?php }?>
                                            
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Date of Birth</label>
                                            <?php if($userdata['user_dob']!=''){?>
                                                <input type="date" class="form-control"  placeholder="Enter Date of Birth" name="user_dob" id="user_dob" value="<?php echo $userdata['user_dob']; ?>" />
                                            <?php }else{?>
                                                <input type="date" class="form-control"  placeholder="Enter Date of Birth" name="user_dob" id="user_dob" />
                                            <?php }?>
                                            
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Gender</label>
                                            <select class="form-select" name="gender" id="gender">
                                                <option value="<?php echo $userdata['gender']; ?>"><?php echo $userdata['gender']; ?></option>
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="input-group">
                                                <?php if($userdata['username']!=''){?>
                                                    <input type="text" class="form-control"  placeholder="Create Username" name="username" id="username" value="<?php echo $userdata['username']?>">
                                                <?php }else{?>
                                                    <input type="text" class="form-control"  placeholder="Create Username" name="username" id="username">
                                                <?php }?>
                                                <div class="input-group-text">@supermacysavingnidhilimited.com</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <?php if($userdata['email']!=''){?>
                                                <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" id="email" value="<?php echo $userdata['email']?>" />
                                            <?php }else{?>
                                                <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" id="email" />
                                            <?php }?>
                                            
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'emailaddress') : '' ?></span>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <?php if($userdata['mobile_no']!=''){?>
                                                <input type="text" class="form-control"  placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" value="<?php echo $userdata['mobile_no']?>" />
                                            <?php }else{?>
                                                <input type="text" class="form-control"  placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" />
                                            <?php }?>
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'mobileno') : '' ?></span>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Change Password</label>
                                            <?php if($userdata['password']!=''){?>
                                                <input type="password" class="form-control"  placeholder="Create Password" name="password" id="password" value="<?php echo $userdata['password'] ?>" />
                                            <?php }else{?>
                                                <input type="password" class="form-control"  placeholder="Create Password" name="password" id="password" />
                                            <?php }?>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Verification Status</label>
                                            <select class="form-select" name="verif_status" id="verif_status" disabled>
                                                <option value="<?php echo $userdata['verif_status']?>"><?php echo $userdata['verif_status']?></option>
                                                <option value="UnVerified">UnVerified</option>
                                                <option value="Verified">Verified</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Full Address</label>
                                            <div>
                                                <?php if($userdata['address']!=''){?>
                                                    <textarea  class="form-control" rows="5" name="address" id="address"><?php echo $userdata['address'];?></textarea>
                                                <?php }else{?>
                                                    <textarea  class="form-control" rows="5" name="address" id="address"></textarea>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Pincode</label>
                                            <?php if($userdata['userUID']!=''){?>
                                                <input type="text" class="form-control"  placeholder="Enter Postal Code" name="pincode" id="pincode" value="<?php echo $userdata['pincode'];?>" />
                                            <?php }else{?>
                                                <input type="text" class="form-control"  placeholder="Enter Postal Code" name="pincode" id="pincode" />
                                            <?php }?>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">State</label>
                                            <?php if($userdata['state']!=''){?>
                                                <input type="text" class="form-control" placeholder="Enter State Name" name="state" id="state"  value="<?php echo $userdata['state']?>" />
                                            <?php }else{?>
                                                <input type="text" class="form-control" placeholder="Enter State Name" name="state" id="state" />
                                            <?php }?>
                                            
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">City</label>
                                            <?php if($userdata['city']!=''){?>
                                                <input type="text" class="form-control"  placeholder="Enter City Name" name="city" id="city" value="<?php echo $userdata['city']?>" />
                                            <?php }else{?>
                                                <input type="text" class="form-control"  placeholder="Enter City Name" name="city" id="city" />
                                            <?php }?>
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Update User
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
<?= $this->include('partials/js/table-edit') ?>
<?= $this->include('partials/js/main') ?>
</body>

</html>