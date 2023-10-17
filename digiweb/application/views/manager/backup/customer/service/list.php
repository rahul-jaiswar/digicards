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
	                                <table id="customer" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                        <tr>
	                                            <th>Company Code</th>
		                                        <th>Company Name</th>
		                                        <th>Total Service Category</th>
		                                        <th>Total Service Listed</th>
		                                        <th>Status</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
		                                        <td>Company Name</td>
		                                        <td>2</td>
		                                        <td>12</td>
		                                        <td>
	                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
	                                                <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                                <div class="modal fade" id="addteam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Service Category Name</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Enter Team Name</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-12">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="row mb-4">
			                            <div class="col-md-12">
			                                <a href="<?= site_url('Customer/team')?>" class="col-md-12 btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#adddesignation">Add Service Category Name <i class="uil uil-arrow-right ms-2"></i> </a>
			                            </div>
			                        </div>
	                                <table id="designation" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                        <tr>
	                                            <th>Sr No</th>
		                                        <th>Company Code</th>
		                                        <th>Service Category</th>
		                                        <th>Status</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
		                                        <td>#TSM0120</td>
		                                        <td>Facebook</td>
		                                        <td>
		                                        	<a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer">Set to Activate</a>
	                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
	                                                <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                <div class="modal fade" id="adddesignation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add New Designation Label</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Enter Designation Label Name</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
		
		<script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#team').DataTable();
			    $('#designation').DataTable();
			    $('#customer').DataTable();

			    //Buttons examples
			    var table = $('#datatable-buttons').DataTable({
			        lengthChange: false,
			        buttons: ['copy', 'excel', 'pdf', 'colvis']
			    });

			    table.buttons().container()
			        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
			        
			        $(".dataTables_length select").addClass('form-select form-select-sm');
			} );
		</script>
    </body>

</html>

