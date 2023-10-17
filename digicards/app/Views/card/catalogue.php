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
                                        <th>Total Catalogue Category</th>
                                        <th>Total Product Listed</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $row = 1; if($cataloguecatlist): ?>
                                    <?php foreach($cataloguecatlist as $data): ?>
                                    <tr>
                                        <td><?= $row++ ?></td>
                                        <td><?= $data->company_code; ?></td>
                                        <td><?= $data->ccategory_name; ?></td>
                                        <td>2</td>
                                        <td>12</td>
                                        <td>
                                            <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
                                            <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
	                            <div class="col-md-12">
	                                <a href="<?= site_url('Customer/team')?>" class="col-md-12 btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#adddesignation">Add Catalogue Category Name <i class="uil uil-arrow-right ms-2"></i> </a>
	                            </div>
	                        </div>
                            <table id="designation" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Company Name</th>
                                        <th>Catalogue Category</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $row = 1; if($cataloguecatlist): ?>
                                    <?php foreach($cataloguecatlist as $data): ?>
                                    <tr>
                                        <td><?= $row++ ?></td>
                                        <td><?= $data->company_code ?></td>
                                        <td><?= $data->ccategory_name ?></td>
                                        <td>
                                        	<a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer">Set to Activate</a>
                                            <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
                                            <a href="<?= site_url('Customer/deleteCatalogue/'.$data->ccategory_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Catalogue Category"><i class="uil-trash"></i></a>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category Category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= site_url('Customer/catalogue')?>" method="POST">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Company Name</label>
                                                <select class="form-control" name="company_code" id="company_code" required>
                                                    <option value="">Select Company Name</option>
                                                    <?php if($customerlist): ?>
                                                    <?php foreach($customerlist as $data): ?>
                                                    <option value="<?php echo $data['company_code']; ?>"><?php echo $data['company_name']; ?></option>
                                                    <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ccategory_name" class="col-form-label">Enter Catalogue Category Name</label>
                                                <input type="text" class="form-control" name="ccategory_name" id="ccategory_name" required>
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
        <?= $this->include('partials/vendor-scripts') ?>
		<?= $this->include('partials/js/main') ?>
		<?= $this->include('partials/js/datatable') ?>
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

