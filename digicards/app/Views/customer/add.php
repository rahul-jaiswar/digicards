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
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?= \Config\Services::validation()->listErrors();
                $message = \Config\Services::session()->getFlashdata('msg');
                //echo"<pre>";print_r(isset($message));exit();?>
                <?php if (isset($message)) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= \Config\Services::session()->getFlashdata('msg'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="custom-validation" action="<?= site_url('Customer/add')?>" method="POST" enctype="multipart/form-data">
                                    <h4 class="card-title">Customer Register Info<hr></h4>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <label class="uploadprofile" style="cursor: pointer;">
                                                Upload Profile
                                                <img id="profilehere" src="http://placehold.it/120x120" style="width:auto ;height: 120px;">
                                                <input id="profile" name="profile_image" class='pis' onchange="uploadprofile(this);" type="file" style="display: none;">
                                            </label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
                                            <div class="mb-2"> 
                                                <label class="form-label">Lead Channel</label>
                                                <select class="form-select form-control" name="lead_channel" id="lead_channel" required>
                                                    <option value="">Select Channel Name</option>
                                                    <option value="Web Commerce">Web Commerce</option>
                                                    <option value="Referral">Referral Program</option>
                                                    <option value="Offline">Offline</option>
                                                    <option value="Franchise">Franchise</option>
                                                    <option value="Amazon">Amazon</option>
                                                    <option value="Flipkart">Flipkart</option>
                                                </select>
                                            </div>
                                            <label class="form-label">Company Category</label>
                                            <select class="form-select" name="company_cat" id="company_cat" required>
                                                <option value="">Select Company Category</option>
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
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
                                            <div class="mb-2">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="username" id="username"  placeholder="Create Username"  value="" required>
                                                <div class="input-group-text">@tap-savvy.com</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control"  name="company_name" id="company_name"  placeholder="Enter Company Name" required />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company URL</label>
                                            <input type="text" class="form-control" name="company_url" id="company_url" placeholder="Enter Company Code"  required />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email_address" id="email_address"  placeholder="Enter Email Address" value="" required />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input type="number" class="form-control"name="mobile_no" id="mobile_no"  placeholder="Enter Mobile No"  required />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"  placeholder="Create Password"  value="" required/>
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
</div>
<!-- END layout-wrapper -->
<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/main') ?>
<script type="text/javascript">

    $(document).ready(function () { 
        $('#lastname').blur('input', function() {
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            $('#username').val(firstname +"."+lastname);

        });
        $('#company_name').blur('input', function() {
            var name = $('#company_name').val();
            var url = name.split(' ').join('-');
            $('#company_url').val(url);
        });
        $('#email_address').change(function(){
           var emailval = $('#email_address').val();
           if(emailval != ''){
                $.ajax({
                    url: "<?php echo site_url(); ?>Customer/validateemail",
                    method: "POST",
                    data: {emailval:emailval},
                    success: function(response){
                    if (response.error){
                        $("#email_address").val('');    
                        $("#email_address").focus();
                        $("#email_address").parent().after("<div style='color:red;'>Email Address Already Exist</div>");
                    }else{
                    }}
                });
            }
        });
        $('#mobile_no').change(function(){
           var mobileval = $('#mobile_no').val();
           if(mobileval != ''){
                $.ajax({
                    url: "<?php echo site_url(); ?>Customer/validatemobile",
                    method: "POST",
                    data: {mobileval:mobileval},
                    success: function(response){
                    if (response.error){
                        $("#mobile_no").val('');    
                        $("#mobile_no").focus();
                        $("#mobile_no").parent().after("<span style='color:red;'>Mobile No Address Already Exist</span>");
                    }else{
                    }}
                });
            }
        });
        $('.uploadprofile').bind("click" , function () {
            $('#profile').click();
        });

    });
    function uploadprofile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profilehere')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>

