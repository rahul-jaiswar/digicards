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
                    	<div class="col-sm-4">
                    		<div class="card bg-primary">
		                        <div class="card-body">
		                            <div class="row align-items-center">
		                                <div class="col-sm-8">
		                                    <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></p>
		                                    <div class="mt-4">
		                                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade Account!</a>
		                                    </div>
		                                </div>
		                                <div class="col-sm-4">
		                                    <div class="mt-4 mt-sm-0">
		                                        <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
		                                    </div>
		                                </div>
		                            </div>
		                        </div> <!-- end card-body-->
		                    </div> <!-- end card-->
                    	</div>
                    	<div class="col-sm-4">
                    		<div class="card bg-primary">
		                        <div class="card-body">
		                            <div class="row align-items-center">
		                                <div class="col-sm-8">
		                                    <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></p>
		                                    <div class="mt-4">
		                                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade Account!</a>
		                                    </div>
		                                </div>
		                                <div class="col-sm-4">
		                                    <div class="mt-4 mt-sm-0">
		                                        <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
		                                    </div>
		                                </div>
		                            </div>
		                        </div> <!-- end card-body-->
		                    </div> <!-- end card-->
                    	</div>
                    	<div class="col-sm-4">
                    		<div class="card bg-primary">
		                        <div class="card-body">
		                            <div class="row align-items-center">
		                                <div class="col-sm-8">
		                                    <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></p>
		                                    <div class="mt-4">
		                                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade Account!</a>
		                                    </div>
		                                </div>
		                                <div class="col-sm-4">
		                                    <div class="mt-4 mt-sm-0">
		                                        <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
		                                    </div>
		                                </div>
		                            </div>
		                        </div> <!-- end card-body-->
		                    </div> <!-- end card-->
                    	</div>
                    </div>
                    
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
		                                        <th>Subscription</th>
		                                    </tr>
		                                </thead>
	                                <tbody>
	                                	<?php foreach($customer as $data):?>
	                                    <tr>
	                                    	<td>12-02-2005</td>
	                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#<?php echo $data->customerUID; ?></a> </td>
	                                        <td><?php echo $data->firstname."  ".$data->lastname;?></td>
                                            <td>
                                                <select class="form-control-sm">
	                                                <option selected>Change Status</option>
	                                                <option value="Update">Basic</option>
	                                                <option value="Activate">Premium</option>
	                                                <option value="De-Activate">Platinum</option>
	                                            </select>
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

