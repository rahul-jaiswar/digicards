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
			                                        <th>Total Product Category</th>
			                                        <th>Total Product Listed</th>
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
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-12">
		                        <div class="card">
		                            <div class="card-body">
		                                <div class="row mb-4">
				                            <div class="col-md-12">
				                                <button href="#" class="col-md-12 btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#addproductcat">Add Product Category Name <i class="uil uil-arrow-right ms-2"></i> </button>
				                            </div>
				                        </div>
		                                <table id="designation" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
		                                    <thead>
		                                        <tr>
		                                            <th>Sr No</th>
			                                        <th>Company Name</th>
			                                        <th>Product Category</th>
			                                        <th>Status</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                    	<?php $row = 1; if($productcategorylist): ?>
                                                <?php foreach($productcategorylist as $data): ?>
		                                        <tr>
		                                            <td><?= $row++?></td>
		                                            <td><?= $data->company_code?></td>
		                                            <td><?= $data->category_name?></td>
			                                        <td>
			                                        	<?php if($data->enable == 1){?>
			                                        	<a href="<?= site_url('Customer/productStatus/'.$data->category_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer">Set to Deactivate</a>
			                                        	<?php }else{?>
		                                        		<a href="<?= site_url('Customer/productStatus/'.$data->category_name)?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer">Set to Activate</a>
			                                        	<?php }?>
		                                                <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
		                                                <a href="<?= site_url('Customer/delProductCategory/'.$data->category_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
		                                            </td>
		                                        </tr>
		                                        <?php endforeach; ?>
                                                <?php endif; ?>
		                                    </tbody>
		                                </table>
		                                <div class="modal fade" id="addproductcat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                        <div class="modal-dialog">
	                                            <div class="modal-content">
	                                                <div class="modal-header">
	                                                    <h5 class="modal-title" id="exampleModalLabel">Add Product Category Name</h5>
	                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                </div>
	                                                <form action="<?= site_url('Customer/product')?>" method="POST">
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
                                                            <label for="category_name" class="col-form-label">Enter Product Category Name</label>
                                                            <input type="text" class="form-control" name="category_name" id="category_name" required>
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

