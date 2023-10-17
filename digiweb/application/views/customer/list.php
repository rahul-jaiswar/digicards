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
	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="row mb-4">
	                            <div class="col-md-6">
	                                <a href="<?= site_url('Customer/add')?>" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New Customer</a>
	                            </div>
	                        </div>
	                        <div class="table-responsive mb-4">
	                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
	                                <thead> 
	                                    <tr class="bg-transparent">
	                                        <th>Customer ID</th>
	                                        <th>Order Date</th>
	                                        <th>Customer</th>
	                                        <th>Email</th>
	                                        <th>Contact No</th>
	                                        <th>Card Details</th>
	                                        <th>Status</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<?php foreach($customer as $data):?>
	                                    <tr>
	                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#<?php echo $data->customerUID; ?></a> </td>
	                                        <td>12-02-2005</td>
	                                        <td><?php echo $data->firstname."  ".$data->lastname;?></td>
	                                        <td><?php echo $data->email; ?></td>
	                                        <td><?php echo $data->mobile_no; ?></td>
	                                        <td>
                                                <a href="<?php echo site_url('Customer/team/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Team"><i class="uil-users-alt"></i></button></a>
                                                <a href="<?php echo site_url('Customer/social/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Social"><i class="uil-facebook"></i></button></a>
                                                <a href="<?php echo site_url('Customer/product/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Product"><i class="uil-box"></i></button></a>
                                                <a href="<?php echo site_url('Customer/service/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip"  data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Service"><i class="uil-store"></i></button></a>
                                                <a href="<?php echo site_url('Customer/catalogue/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Catalogue"><i class="uil-book"></i></button></a>
                                                <a href="<?php echo site_url('Customer/gallery/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Gallery"><i class="uil-images"></i></button></a>
                                                <a href="<?php echo site_url('Customer/payment/'.$data->customerUID);?>"><button class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" rel="tooltip"data-bs-original-title="Add Payments"><i class="uil-wallet"></i></button></a>
                                                
                                            </td>
                                            <td>
                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
                                                <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
                                            </td>
	                                    </tr>
	                                	<?php endforeach;?>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                
	                <!-- end row -->
	            </div> <!-- container-fluid -->
		    </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

