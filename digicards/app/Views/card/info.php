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
	                                        <th>Username</th>
	                                        <th>Status</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
	                                        
	                                        <td>
	                                            12-02-2005
	                                        </td>
	                                        <td>
	                                            Customer Name
	                                        </td>
	                                        <td>admin@gmail.com</td>

	                                        <td>
	                                            0123456789
	                                        </td>
	                                        <td>
	                                            rahul
	                                        </td>
	                                        <td>
	                                            <select class="form-control-sm">
	                                                <option>New</option>
	                                                <option value="In-Progress">In-Progress</option>
	                                                <option value="Operation">Operation</option>
	                                                <option value="Payment">Payment</option>
	                                                <option value="Delivered">Delivered</option>
	                                            </select>
	                                        </td>
	                                    </tr>
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

