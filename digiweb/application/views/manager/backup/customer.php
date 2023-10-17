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
	                        <div class="card">
	                            <div class="card-body">
	                                <table id="customer" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                    <tr>
	                                    	<th>Order Date</th>
	                                        <th>Customer ID</th>
	                                        <th>Customer</th>
	                                        <th>Email</th>
	                                        <th>Contact No</th>
	                                        <th>Template</th>
	                                        <th>Status</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<?php foreach($customer as $data):?>
	                                    <tr>
	                                    	<td>12-02-2005</td>
	                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#<?php echo $data->customerUID; ?></a> </td>
	                                        <td><?php echo $data->firstname."  ".$data->lastname;?></td>
	                                        <td><?php echo $data->email; ?></td>
	                                        <td><?php echo $data->mobile_no; ?></td>
	                                        <td>
                                                <select class="form-control-sm">
		                                                <option selected="">Change Template</option>
		                                                <option value="Update">Template One</option>
		                                                <option value="Activate">Template Two</option>
		                                                <option value="De-Activate">Template Three</option>
		                                            </select>
                                                
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

