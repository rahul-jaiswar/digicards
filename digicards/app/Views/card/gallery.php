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
                            <table id="gallery" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
			    $('#gallery').DataTable();
			} );
		</script>
    </body>

</html>

