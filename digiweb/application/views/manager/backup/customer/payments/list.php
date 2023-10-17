<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
    <link href="<?php echo site_url('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url('assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo site_url('assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
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
	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="row mb-4">
			                            <div class="col-md-6">
			                                <a href="<?= site_url('Customer/team')?>" class="btn btn-success waves-effect waves-light">Customer List</a>
			                            </div>
			                            <div class="col-md-6">
			                                <a href="<?= site_url('Customer/team')?>" class="btn btn-success waves-effect waves-light float-end"><i class="mdi mdi-plus me-2"></i> Add Social Media Channel</a>
			                            </div>
			                        </div>
	                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                        <tr>
	                                            <th>Sr No</th>
		                                        <th>Category Name</th>
		                                        <th>Status</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
		                                        <td>Company Name</td>
		                                        <td>
		                                            <select class="form-control-sm">
		                                                <option selected>Change Status</option>
		                                                <option value="Update">Update</option>
		                                                <option value="Activate">Activate</option>
		                                                <option value="De-Activate">De-Activate</option>
		                                            </select>
		                                        </td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
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
		<!-- Required datatable js -->
		<script src="<?php echo site_url('assets/admin/libs/datatables.net/js/jquery.dataTables.min.js')?>"></script>
		<script src="<?php echo site_url('assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
		<!-- Responsive examples -->
		<script src="<?php echo site_url('assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
		<script src="<?php echo site_url('assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')?>"></script>
		<!-- init js -->
		<script src="<?php echo site_url('assets/admin/js/pages/datatables.init.js')?>"></script>
		<script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>
    </body>

</html>

