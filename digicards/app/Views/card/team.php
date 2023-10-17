<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/datatable') ?>
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
	                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
	                    <?= \Config\Services::session()->getFlashdata('msg'); ?>
	                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
	                    </button>
	                </div>
	                <?php endif; ?>
	                <div class="row">
	                	<div class="col-lg-12">
	                        <div class="card">
	                            <div class="card-body">
	                                <table id="customer" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                        <tr>
	                                            <th>Company Code</th>
		                                        <th>Company Name</th>
		                                        <th>Total Team Member</th>
		                                        <th>Status</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
                                            <?php foreach($teamcount as $data): ?>
	                                        <tr>
	                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
		                                        <td>Company Name</td>
		                                        <td>12</td>
		                                        <td>
	                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
	                                                <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                        <?php endforeach; ?>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-6">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="row mb-4">
			                            <div class="col-md-12">
			                                <a href="<?= site_url('Customer/team')?>" class="col-md-12 btn btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#addteam"><i class="mdi mdi-plus me-2"></i> Add Team Category</a>
			                            </div>
			                        </div>
	                                <table id="team" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                        <tr>
	                                            <th>Sr No</th>
		                                        <th>Company Code</th>
		                                        <th>Category Name</th>
		                                        <th>Status</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    	<?php $row = 1; if($teamnamelist): ?>
                                            <?php foreach($teamnamelist as $data): ?>
	                                        <tr>
	                                            <td><?= $row++?></td>
	                                            <td><?= $data->company_name?></td>
	                                            <td><?= $data->tcat_name?></td>
		                                        <td>
	                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Team Category"><i class="uil-edit"></i></a>
	                                                <a href="<?= site_url('Customer/deleteCategory/'.$data->tcat_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Team Category"><i class="uil-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                        <?php endforeach; ?>
                                            <?php endif; ?>
	                                    </tbody>
	                                </table>
	                                <div class="modal fade" id="addteam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add New Team Name</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="<?= site_url('Customer/insertCategory')?>" method="POST">
                                                <div class="modal-body">
                                                	<div class="mb-3">
			                                            <label class="form-label">Company Name</label>
			                                            <select class="form-control" name="company_name" id="company_name" required>
			                                                <option value="">Select Company Name</option>
			                                                <?php if($customerlist): ?>
			                                                <?php foreach($customerlist as $data): ?>
			                                                <option value="<?php echo $data['company_name']; ?>"><?php echo $data['company_name']; ?></option>
			                                                <?php endforeach; ?>
			                                                <?php endif; ?>
			                                            </select>
			                                        </div>
                                                    <div class="mb-3">
                                                        <label for="tcat_name" class="col-form-label">Enter Team Name</label>
                                                        <input type="text" class="form-control" name="tcat_name" id="tcat_name" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-6">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="row mb-4">
			                            <div class="col-md-12">
			                                <a href="<?= site_url('Customer/team')?>" class="col-md-12 btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#adddesignation">Add Designation <i class="uil uil-arrow-right ms-2"></i> </a>
			                            </div>
			                        </div>
	                                <table id="designation" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	                                    <thead>
	                                        <tr>
	                                            <th>Sr No</th>
		                                        <th>Company Code</th>
		                                        <th>Category Name</th>
		                                        <th>Status</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    	<?php $rowNo = 1;
	                                    	if($designationlist): ?>
                                            <?php foreach($designationlist as $data): ?>
	                                        <tr>
		                                        <td><?=$rowNo++?></td>
		                                        <td><?= $data->company_name; ?></td>
		                                        <td><?= $data->tdesignation_name; ?></td>
		                                        <td>
	                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
	                                                <a href="<?= site_url('Customer/deleteDesignation/'.$data->tdesignation_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
	                                            </td>
	                                        </tr>
	                                        <?php endforeach; ?>
                                            <?php endif; ?>
	                                    </tbody>
	                                </table>
	                                <div class="modal fade" id="adddesignation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add New Designation Label</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="<?= site_url('Customer/insertDesignation')?>" method="POST">
                                                <div class="modal-body">
                                                	<div class="mb-3">
			                                            <label class="form-label">Company Name</label>
			                                            <select class="form-control" name="company_name" id="company_name" required>
			                                                <option value="">Select Company Name</option>
			                                                <?php if($customerlist): ?>
			                                                <?php foreach($customerlist as $data): ?>
			                                                <option value="<?php echo $data['company_name']; ?>"><?php echo $data['company_name']; ?></option>
			                                                <?php endforeach; ?>
			                                                <?php endif; ?>
			                                            </select>
			                                        </div>
                                                    <div class="mb-3">
                                                        <label for="tdesignation_name" class="col-form-label">Enter Designation Label Name</label>
                                                        <input type="text" class="form-control" id="tdesignation_name" name="tdesignation_name">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                                </form>
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
    </div>
    <!-- END layout-wrapper -->
    <?= $this->include('partials/vendor-scripts') ?>
	<?= $this->include('partials/js/main') ?>
	<?= $this->include('partials/js/datatable') ?>
	<script type="text/javascript">
	    $(document).ready(function() {
	    	$('#team').DataTable();
		    $('#designation').DataTable();
		    $('#customer').DataTable();
	    });
	</script>
</body>
</html>

